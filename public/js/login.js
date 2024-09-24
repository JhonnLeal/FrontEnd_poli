

function login() {
    // Obtener los valores del formulario
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    // Lista de 10 usuarios (incluyendo 2 administradores) con sus roles y contraseñas
    const users = [
        { email: "yonatan", password: "1234", role: "cliente" },
        { email: "maria", password: "5678", role: "cliente" },
        { email: "pedro", password: "abcd", role: "cliente" },
        { email: "julia", password: "efgh", role: "cliente" },
        { email: "juan", password: "ijkl", role: "cliente" },
        { email: "ana", password: "mnop", role: "cliente" },
        { email: "luis", password: "qrst", role: "cliente" },
        { email: "laura", password: "uvwx", role: "cliente" },
        { email: "diego", password: "yz12", role: "cliente" },
        { email: "sofia", password: "3456", role: "cliente" },
        { email: "admin1", password: "adminpass1", role: "administrador" },
        { email: "admin2", password: "adminpass2", role: "administrador" }
    ];

    // Verificar si el usuario existe y la contraseña es correcta
    const user = users.find(user => user.email === email && user.password === password);

    if (user) {
        if (user.role === "administrador") {
            // Redirigir al dashboard del administrador
            window.location.href = "../admin/";
        } else {
            // Redirigir a la vista del cliente
            window.location.href = "../cliente/";
        }
    } else {
        // Mostrar un mensaje de error si las credenciales son incorrectas
        alert("Datos incorrectos");
    }
}
