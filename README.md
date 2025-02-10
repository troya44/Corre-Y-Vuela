Mi Proyecto: Corre y Vuela

Logo de Corre Y Vuela
Descripción

Esta empresa consiste en organizar Eventos Deportivos al aire libre, es decir, organizar carreras de senderismo, running y ciclismo al aire libre con espestáculos audiovisuales
Características Principales

    Organización de carreras de running, ciclismo y senderismo
    Sistema de inscripción en línea para carreras y eventos
    Seguimiento en tiempo real de participantes durante los eventos
    Seguimiento de los eventos audiovisuales a través de la aplicación
    Integración con redes sociales para compartir logros, fotos y experiencias

Próximos Eventos
Evento 	Fecha 	Ubicación 	Distancia
San Silvestre Olvereña 	31/12/2024 	Olvera 	3km, 6km, 12km
Open Sierra de Cádiz 	15/05/2025 	Olvera, Algodonales y Alcala del Valle 	21km, 42km
Tour Sierra de Cádiz 	22/08/2025 	Ronda, Arriate, Setenil, Alcala y Olvera 	130km
Nuestro espacio

Visita Corre Y Vuela
Contactarnos

    Correo: correyvuela.contacto@gmail.com
    Telefono: 642777183
    Dirección: Olvera, Cádiz

# Funcion para ver las inscripciones que hay en una carrera
function obtenerInscripcion($id) {
    $conexion = conexionBD();

    $sql = "SELECT * FROM inscripciones where id = ?";
    $queryFormateada = $conexion->prepare($sql);
    $queryFormateada->bind_param('i', $id);
    $queryFormateada->execute();
    $resultado = $queryFormateada->get_result();
    $inscripciones = [];

    while ($fila = $resultado->fetch_assoc()) {
        $inscripciones []  = new Inscripcion($fila['id'], $fila['nombre'], $fila['apellidos'], $fila['dni'],$fila['email'], $fila['telefono'], $fila['fechaNacimiento']);
    }
    $conexion->close();
    return $inscripciones;
}

