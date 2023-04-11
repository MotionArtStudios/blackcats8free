jQuery(document).ready(function($) {
    var repoURL = 'https://api.github.com/repos/tu-usuario/tu-repositorio'; // Reemplaza esto con la URL de tu repositorio en GitHub
    var currentVersion = '8.0.0'; // Reemplaza esto con el número de versión actual de tu tema
    var headers = {
        'Accept': 'application/vnd.github.v3+json'
    };
    $.ajax({
        url: repoURL,
        headers: headers,
        success: function(result) {
            var latestVersion = result.tag_name.replace(/^v/, '');
            if (latestVersion !== currentVersion) {
                // La versión más reciente está disponible. Ofrecer la actualización.
            }
        }
    });
});