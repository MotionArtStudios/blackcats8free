<?php
function blackcats_theme_ajustes(){  
    // agregando menu para la informacion de la empresa
    add_menu_page(
        'Perfil Pagina Web',
        'Blackcats Pro', 
        'administrator', 
        'blckcats-options', 
        'func_blackcats_opciones',
        get_stylesheet_directory_uri() . '/assets/images/blackcat-menu.png',
        2
    ); 

    add_submenu_page(
        'blckcats-options',
        'Blackcats Theme Edit',
        'Blackcats Thema',// titulo menu
        'manage_options',
        'blackcats-thema',
        'blackcatsthema'
    );


    add_action('admin_init', 'blackcats_registrar_ajustes');
    add_action('admin_init', 'blackcats_thema_ajustes');
    
}
add_action('admin_menu', 'blackcats_theme_ajustes');

require_once get_template_directory() . '/core/blackcats-thema.php';

function blackcats_registrar_ajustes(){
         // Registro de Informacion de la plantilla
         register_setting('blckcats-options','circe_direccion');
}

function func_blackcats_opciones(){ 
                $proversion = BACKCATS_THEME_DIR. '/core/pro/blackcatspro.php'; if (file_exists($proversion)) { $versionproactive = "Pro";
                }else { $versionproactive = "Free"; }
    ?>
    <div class="wrap">
        <div class="content-blackcats-maya">
                <h1 class="title-maya-1">Blackcats <?php echo $versionproactive; ?></h1>
                <div>
                        <p class="maya-txt-j maya-txt-box maya-p">
                            "La plantilla WordPress "Blackcats" es una excelente opción para aquellos que buscan un diseño moderno para su sitio web. 
                            Con una interfaz fácil de usar, esta plantilla es perfecta tanto para sitios web personales como para sitios web corporativos.
                            "Blackcats" también es altamente funcional. 
                        </p>
                        <p class="maya-txt-j maya-txt-box maya-p">
                            La plantilla está optimizada para una carga rápida de páginas y es totalmente compatible con dispositivos móviles, 
                            lo que garantiza una experiencia de usuario perfecta para tus visitantes en cualquier dispositivo. También cuenta con integraciones API, 
                            lo que permite a los desarrolladores personalizar la plantilla para satisfacer las necesidades específicas de su sitio web.    
                        
                        </p>
                        <p class="maya-txt-j maya-txt-box maya-p">
                        <?php if (file_exists($proversion)){ }else{?>
                            <button class="maya-dark-bg maya-light maya-boton"> <a target="_blank" class="maya-light maya-boton" href="https://blackcats.com.co/blackcatspro"> Desbloquea Version Pro </a></button>
                        <?php } ?>
                        </p>
                        <iframe id="inlineFrameExample"
                                title="Inline Frame Example"
                                width="100%"
                                height="300"
                                src="https://cdn.blackcats.com.co/update-blackcat.php">
                        </iframe>

                </div>
        </div>
    </div>
<?php }

