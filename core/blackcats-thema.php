<?php
function blackcats_thema_ajustes(){
    // Registro de Informacion de la plantilla
    register_setting('blckcats-options','blackcats_theme_maquetador');
    register_setting('blckcats-options','blackcats_theme_header');
    register_setting('blckcats-options','blackcats_theme_footer');
}
function blackcatsthema(){
    $proversion = BACKCATS_THEME_DIR. '/core/pro/blackcatspro.php'; if (file_exists($proversion)) { $versionproactive = "Pro";
    }else { $versionproactive = "Free"; } ?>
    <div class="wrap">
        <div class="content-blackcats-maya">
        <?php if (file_exists($proversion)){ ?>
            <h1 class="title-maya-1">Configuración de Blackcats</h1>
            <form action="options.php" method="post">
       
                <?php settings_fields('blckcats-options'); ?>
                <?php do_settings_sections('blckcats-options'); ?>

                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Usar Elementor Theme Builder</th>
                        <td>
                                <select name="blackcats_theme_maquetador">
                                   <?php $maquetador = get_option('blackcats_theme_maquetador'); 
                                        if ($maquetador ==""){

                                          if($maquetador == "Elementor"){?><option value="Wordpress">Wordpress</option> <?php } 
                                        if($maquetador == "Wordpress"){?><option value="Elementor">Elementor</option><?php } 
                                   } else{ ?>
                                    <option  value="<?php echo esc_attr( get_option('blackcats_theme_maquetador')); ?>"><?php echo esc_attr( get_option('blackcats_theme_maquetador')); ?></option>
                                    <?php  if($maquetador == "Elementor"){?><option value="Wordpress">Wordpress</option> <?php } ?>
                                    <?php if($maquetador == "Wordpress"){?><option value="Elementor">Elementor</option><?php } }?>
                                </select>
                        </td>
                    </tr>
                </table>
                <?php if ($maquetador == "Wordpress") { ?>
                <h2 class="title-maya-1"> Cabecera / header de Blackcats</h2>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Header</th>
                        <td>
                                <select name="blackcats_theme_header">
                                
                                    <?php 
                                        $header = get_option('blackcats_theme_header');
                                       
                                        if($header == ""){ ?>
                                        <options value="Linea">Linea</options>
                                        <option value="Bloque">Bloque</option>
                                    <?php } else { echo "entro  else";?>
                                                <option  value="<?php echo esc_attr( get_option('blackcats_theme_header')); ?>"><?php echo esc_attr( get_option('blackcats_theme_header')); ?></option>
                                                    <?php if($header == "Bloque") { ?> 
                                                <option value="Linea">Linea</option> 
                                                    <?php } 
                                                        if($header == "Linea"){ ?>
                                                <option value="Bloque">Bloque</option>
                                            <?php } } ?>
                                </select>
                        </td>
                    </tr>
                    <tr valign="top">
                    <h2 class="title-maya-1"> Footer de Blackcats</h2>
                        <th scope="row">Footer</th>
                        <td>
                                <select name="blackcats_theme_footer">
                                
                                    <?php 
                                        $footer = get_option('blackcats_theme_footer');
                                       
                                        if($footer == ""){ ?>
                                        <options value="footer1">footer1</options>
                                        <option value="footer2">footer2</option>
                                    <?php } else { ?>
                                                <option  value="<?php echo esc_attr( get_option('blackcats_theme_footer')); ?>"><?php echo esc_attr( get_option('blackcats_theme_footer')); ?></option>
                                                    <?php if($footer == "footer2") { ?> 
                                                <option value="footer1">footer1</option> 
                                                    <?php } 
                                                        if($footer == "footer1"){ ?>
                                                <option value="footer2">footer1</option>
                                            <?php } } ?>
                                </select>
                        </td>
                    </tr>

                </table>
                <?php } ?>
                <?php submit_button(); ?>
            </form>
<!-- No es Pro -->
        <?php } else{?>
                <h1 class="title-maya-1">Estas usando la Version Gratuita de Blackcats</h1>
                <p class="maya-txt-j maya-txt-box maya-p">
                    Actualiza a la version pro  Para Acceder a las personalizaciones
                </p>
                <p class="maya-txt-j maya-txt-box maya-p">
                    
                        <button class="maya-dark-bg maya-light maya-boton"> 
                            <a target="_blank" class="maya-light maya-boton" href="https://blackcats.com.co/blackcatspro"> Desbloquea Version Pro </a>
                        </button>
                    
                </p>
                <p>
                    <iframe id="inlineFrameExample"
                                title="Inline Frame Example"
                                width="100%"
                                height="300"
                                src="https://cdn.blackcats.com.co/blackcatpro.php">
                    </iframe>
                </p>
                <?php } ?>
        </div>
    </div>
<?php } ?>

 