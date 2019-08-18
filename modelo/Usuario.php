<?php  include_once './modelo/Egresado.php';

class Usuario extends Egresado
{
    private $usuario;
    private $idUsuario;
    private $contra;

    public function __construct($idUsuario, $usuario, $idEgresado, $matricula, $nombre, $apellido_paterno, $apellido_materno, $contra)
    {
        parent::__construct($idEgresado, $matricula, $nombre, $apellido_paterno, $apellido_materno);
        $this->usuario = $usuario;
        $this->idUsuario = $idUsuario;
        $this->contra = $contra;
    }

    public function add()
    {
        include_once './modelo/conexion.php';

        $con = new DatabaseConnect();
        $cdb = $con->dbConnectSimple();

        $verificaSql = "SELECT * FROM usuario WHERE matricula = '".parent::getMatricula()."'";
        $resV = mysqli_query($cdb, $verificaSql);

        if ($row = mysqli_fetch_array($resV)) {
            ?>
					<script type="text/javascript">
						  //define a new errorAlert base on alert
						  alertify.dialog('errorAlert',function factory(){
						    return{
						            build:function(){
						                var errorHeader = '<span class="fa fa-warning fa-2x" '
						                +    'style="vertical-align:middle;color:#F1EC3F;">'
						                + '</span> Hay un pequeño problema';
						                this.setHeader(errorHeader);
						            }
						        };
						    },true,'alert');

						    alertify.errorAlert("Lo sentimos, pero la matricula <?php echo parent::getMatricula(); ?> que nos otorgaste ya esta registrada");
					</script>
				<?php
        } else {
            $this->procedimientoRegUsu(parent::getMatricula(), parent::getNombre(), parent::getApellidoPaterno(), parent::getApellidoMaterno(), $this->contra);
        }

        mysqli_close($cdb);
    }

    public function upd()
    {
    }

    public function del($mat)
    {
    }

    public function login()
    {
        include_once './modelo/conexion.php';

        $con = new DatabaseConnect();
        $cdb = $con->dbConnectSimple();

        $sql = "SELECT nombre, apellidoP, apellidoM, idegresado, idusuario, usuario.matricula , contesto_encuesta, contesto_encuesta_satisfaccion FROM `usuario` INNER JOIN egresado ON egresado.idegresado = usuario.egresado_idegresado INNER JOIN encuesta ON encuesta.idencuesta = egresado.encuesta_idencuesta INNER JOIN encuestasatisfaccion ON encuestasatisfaccion.idencuestasatisfaccion = egresado.encuestasatisfaccion_idencuestasatisfaccion WHERE usuario.matricula = '".parent::getMatricula()."' AND contrasena = '".$this->contra."';";

        echo $sql;

        $res = mysqli_query($cdb, $sql);

        if ($row = mysqli_fetch_assoc($res)) {
            $_SESSION['idegresado'] = $row['idegresado'];
            $_SESSION['idUsuario'] = $row['idusuario'];
            $_SESSION['matricula'] = $row['matricula'];
            $_SESSION['nombre'] = $row['nombre'].' '.$row['apellidoP'].' '.$row['apellidoM'];

            if (($row['contesto_encuesta_satisfaccion'] == true)) {
                ?>
				<script type="text/javascript">
					location.href='./Registro6meses.php?<?php echo $row['contesto_encuesta_satisfaccion']; ?>';
				</script>
				<?php
            } else {
                if ($row['contesto_encuesta'] == false) {
                    ?>
					<script type="text/javascript">
						location.href='./info-contesto.php?<?php echo $row['contesto_encuesta']; ?>';
					</script>
					<?php
                } else {
                    ?>
					<script type="text/javascript">
						location.href='./RegistroAnio.php';
					</script>
					<?php
                }
            }
        } else {
            ?>
					<script type="text/javascript">
						  //define a new errorAlert base on alert
						  alertify.dialog('errorAlert',function factory(){
						    return{
						            build:function(){
						                var errorHeader = '<span class="fa fa-warning fa-2x" '
						                +    'style="vertical-align:middle;color:#F1EC3F;">'
						                + '</span> Hay un pequeño problema';
						                this.setHeader(errorHeader);
						            }
						        };
						    },true,'alert');

						    alertify.errorAlert("Lo sentimos, Verifique que sus datos esten correctos porque no encotramos registro de estas credenciales: <?php echo mysqli_error($cdb); ?> <br><a href='registrar.php'>Vamos a registrarnos</a>");
					</script>
			<?php
        }

        mysqli_close($cdb);
    }

	/**
	 * Función que realiza una consulta para poder ingresar al dashboard del alumno,
	 * pasando por SESSION los resultados de la consulta.
	 */
    public function loginAlumno()
    {
        include_once './modelo/conexion.php';

        $con = new DatabaseConnect();
        $cdb = $con->dbConnectSimple();

        $sql = "SELECT nombre, apellidoP, apellidoM, idegresado, idusuario, usuario.matricula , usuario.contrasena, contesto_encuesta, contesto_encuesta_satisfaccion FROM `usuario` INNER JOIN egresado ON egresado.idegresado = usuario.egresado_idegresado INNER JOIN encuesta ON encuesta.idencuesta = egresado.encuesta_idencuesta INNER JOIN encuestasatisfaccion ON encuestasatisfaccion.idencuestasatisfaccion = egresado.encuestasatisfaccion_idencuestasatisfaccion WHERE usuario.matricula = '".parent::getMatricula()."' AND contrasena = '".$this->contra."';";

        echo $sql;

        $res = mysqli_query($cdb, $sql);

        if ($row = mysqli_fetch_assoc($res)) {
            $_SESSION['idegresado'] = $row['idegresado'];
            $_SESSION['idUsuario'] = $row['idusuario'];
            $_SESSION['matricula'] = $row['matricula'];
			$_SESSION['nombre'] = $row['nombre'];
			$_SESSION['apPaterno'] = $row['apellidoP'];
			$_SESSION['apMaterno'] = $row['apellidoM'];
			$_SESSION['psw'] = $row['contrasena'];
			$_SESSION['encuesta_seis_meses'] = $row['contesto_encuesta_satisfaccion'];
			$_SESSION['encuesta_un_anio'] = $row['contesto_encuesta'];

			?>
				
				<script type="text/javascript">
					location.href='./alumno-dashboard.php';
				</script>

			<?php
        } else {
            ?>
					<script type="text/javascript">
						  //define a new errorAlert base on alert
						  alertify.dialog('errorAlert',function factory(){
						    return{
						            build:function(){
						                var errorHeader = '<span class="fa fa-warning fa-2x" '
						                +    'style="vertical-align:middle;color:#F1EC3F;">'
						                + '</span> Hay un pequeño problema';
						                this.setHeader(errorHeader);
						            }
						        };
						    },true,'alert');

						    alertify.errorAlert("Lo sentimos, Verifique que sus datos esten correctos porque no encotramos registro de estas credenciales: <?php echo mysqli_error($cdb); ?> <br><a href='registrar.php'>Vamos a registrarnos</a>");
					</script>
			<?php
        }

        mysqli_close($cdb);
    }

    public function loginAdm()
    {
        include_once './modelo/conexion.php';

        $con = new DatabaseConnect();
        $cdb = $con->dbConnectSimple();

        $sqlAdm = "SELECT * FROM `admin` WHERE `usuario` = '".$this->usuario."' AND `clave` = '".$this->contra."';";

        $resAdm = mysqli_query($cdb, $sqlAdm);

        if ($row = mysqli_fetch_assoc($resAdm)) {
            $_SESSION['idamin'] = $row['id_admin'];
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['nombre'] = $row['nombre']; ?>
				<script type="text/javascript">
					location.href='./index-admin.php';
				</script>
			<?php
        } else {
            ?>
					<script type="text/javascript">
						  //define a new errorAlert base on alert
						  alertify.dialog('errorAlert',function factory(){
						    return{
						            build:function(){
						                var errorHeader = '<span class="fa fa-warning fa-2x" '
						                +    'style="vertical-align:middle;color:#F1EC3F;">'
						                + '</span> Hay un pequeño problema';
						                this.setHeader(errorHeader);
						            }
						        };
						    },true,'alert');

						    alertify.errorAlert("Lo sentimos, Verifique que sus datos esten correctos porque no encotramos registro de estas credenciales: <?php echo mysqli_error($cdb); ?> ");
					</script>
			<?php
        }

        mysqli_close($cdb);
    }

    public function procedimientoRegUsu($matricula, $nombre, $apePa, $apeMa, $contra)
    {
        include_once './modelo/conexion.php';

        $con = new DatabaseConnect();
        $cdb = $con->dbConnectSimple();

        mysqli_autocommit($cdb, false);

        $flag1 = true;
        $flag2 = true;
        $flag3 = true;
        $flag4 = true;

        $q1 = "INSERT INTO `encuesta` (`idencuesta`, `pdf`, `contesto_encuesta`, `fecha_contesto`) 
    			VALUES (NULL, '".$matricula.".pdf', 'false', '0000-00-00');";

        $result1 = mysqli_query($cdb, $q1);
        $idencuesta = mysqli_insert_id($cdb);

        $q4 = "INSERT INTO `encuestasatisfaccion` (`idencuestasatisfaccion`, `pdf`, `contesto_encuesta_satisfaccion`, `fecha_contesto`) 
    			VALUES (NULL, '".$matricula.".pdf', 'false', '0000-00-00');";

        $result4 = mysqli_query($cdb, $q4);
        $idsatisfaccion = mysqli_insert_id($cdb);

        $q2 = 'INSERT INTO `egresado` (`idegresado`, `matricula`, `nombre`, `apellidoP`, `apellidoM`, `encuesta_idencuesta`, encuestasatisfaccion_idencuestasatisfaccion) 
    				VALUES (NULL, "'.$matricula.'", "'.$nombre.'", "'.$apePa.'", "'.$apeMa.'", '.$idencuesta.', '.$idsatisfaccion.');';

        $result2 = mysqli_query($cdb, $q2);

        date_default_timezone_set('America/Mexico_City');
        $fechaActual = date('Y-m-d');

        $q3 = "INSERT INTO `usuario` (`idusuario`, fecha_registro, `matricula`, `contrasena`, `egresado_idegresado`) 
                    VALUES (NULL, '".$fechaActual."', '".$matricula."', '".$contra."', ".mysqli_insert_id($cdb).');';

        $result3 = mysqli_query($cdb, $q3);

        if (!$result1) {
            $flag1 = false;
            echo 'Error q1: '.mysqli_error($cdb).'. ';
            //echo $q1;
        }

        if (!$result2) {
            $flag2 = false;
            echo 'Error q2: '.mysqli_error($cdb).'. ';
            //echo $q2;
        }

        if (!$result3) {
            $flag3 = false;
            echo 'Error q3: '.mysqli_error($cdb).'. ';
            //echo $q3;
        }

        if (!$result4) {
            $flag4 = false;
            echo 'Error q4: '.mysqli_error($cdb).'. ';
            //echo $q3;
        }

        if ($flag1 == true && $flag2 == true && $flag3 == true && $flag4 == true) {
            mysqli_commit($cdb); ?>
					<script type="text/javascript">
						  //define a new errorAlert base on alert
						  alertify.dialog('errorAlert',function factory(){
						    return{
						            build:function(){
						                var errorHeader = '<span class="fa fa-check-square-o fa-2x" '
						                +    'style="vertical-align:middle;color:#13C366;">'
						                + '</span> La acción trascurrió satisfactoriamente';
						                this.setHeader(errorHeader);
						            }
						        };
						    },true,'alert');

						    alertify.errorAlert("Tu registro ha sido exitoso, ahora puedes iniciar sesion");

						    setTimeout("location.href='./index.php'", 3000);

					</script>
				<?php
        } else {
            mysqli_rollback($cdb); ?>
					<script type="text/javascript">
						 //define a new errorAlert base on alert
						  alertify.dialog('errorAlert',function factory(){
						    return{
						            build:function(){
						                var errorHeader = '<span class="fa fa-times-circle fa-2x" '
						                +    'style="vertical-align:middle;color:#e10000;">'
						                + '</span>  Error en la Aplicación';
						                this.setHeader(errorHeader);
						            }
						        };
						    },true,'alert');

						    alertify.errorAlert("Lo sentimos, Hubo un error en el registro; si el problema perciste favor de reportarlo. ERROR: <?php echo mysqli_error($cdb); ?>");
					</script>
				<?php
        }
    }

    public function __destruct()
    {
    }
}
?>