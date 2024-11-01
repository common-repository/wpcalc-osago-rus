<?php
if ( ! defined( 'ABSPATH' ) ) exit;
if (isset($_POST['save'])) {
    update_option('osagoru1', sanitize_text_field($_POST['osagoru1']));
	update_option('osagoru2', sanitize_text_field($_POST['osagoru2']));
	update_option('osagoru3', sanitize_text_field($_POST['osagoru3']));
	update_option('osagoru4', sanitize_text_field($_POST['osagoru4']));
	update_option('osagoru5', sanitize_text_field($_POST['osagoru5']));
	update_option('osagoru6', sanitize_text_field($_POST['osagoru6']));
	update_option('osagoru7', sanitize_text_field($_POST['osagoru7']));
	update_option('osagoru8', sanitize_text_field($_POST['osagoru8']));
	update_option('osagoru9', sanitize_text_field($_POST['osagoru9']));
	update_option('osagoru10', sanitize_text_field($_POST['osagoru10']));
	update_option('osagoru11', sanitize_text_field($_POST['osagoru11']));
	update_option('osagoru12', sanitize_text_field($_POST['osagoru12']));	
	update_option('wpcalc_osago_rus_size', sanitize_text_field($_POST['wpcalc_osago_rus_size']));
	update_option('wpcalc_osago_rus_color', sanitize_text_field($_POST['wpcalc_osago_rus_color']));
	update_option('wpcalc_osago_rus_button', sanitize_text_field($_POST['wpcalc_osago_rus_button']));  
    echo '<div id="setting-error-settings_updated" class="updated settings-error"><p><b>'.__('Settings saved.').'</b></p></div>';
}
?>
<div style="padding:10px;">
<a href="http://wpcalc.com/" target="_blank"><img src="<?php echo plugins_url('knowhow-logo.png', __FILE__); ?>"></a>
</div>

   <form method="post">

        <h2>Настройка калькулятора ОСАГО</h2>
<div class="wpcmfadmintext">
Для интеграции калькулятора ОСАГО в страницу или запись используйте шорткод <b>[wpcosagorus]</b>. По всем возникающим вопросам обращайтесь по адресу ad@wpcalc.com. Наш сайт - <a href="http://wpcalc.com/">wpcalc.com</a>
Вы можете приобрести полную версию калькулятора ОСАГО с редактированием всех коэффициентов и отправкой на данных на почту по адресу <a href="http://wpcalc.com/plagin-kalkulyatora-osago/"> http://wpcalc.com/plagin-kalkulyatora-osago/</a>

</div>          

<div style="padding:10px;"></div>

<div class="wpcmfadmin">
<input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1">Дополнительно</label>
 
    <input id="tab2" type="radio" name="tabs">
    <label for="tab2" >Физ. лицо</label>
 
    <input id="tab3" type="radio" name="tabs">
    <label for="tab3">Юр. лицо</label>
	
	<input id="tab4" type="radio" name="tabs">
    <label for="tab4">Плагины</label>




<section id="content1">

<p><span><input type="number" name="wpcalc_osago_rus_size" value="<?php echo get_option('wpcalc_osago_rus_size'); ?>" /> px</span> - Размер текста результатов</p>

<p><span><input type="text" class="colorbox" name="wpcalc_osago_rus_color" value="<?php echo get_option('wpcalc_osago_rus_color'); ?>" /> </span> - Цвет результатов (<a href="http://wpcalc.com/color-konverter/" target="_blank">выбор цвета</a>)</p>


</section>


<section id="content2">
<p><span><input type="number" name="osagoru1" value="<?php echo get_option('osagoru1'); ?>" /></span> - Легковой автомобиль (кат. В)</p>
<p><span><input type="number" name="osagoru2" value="<?php echo get_option('osagoru2'); ?>" /></span> - Легковой автомобиль в качестве такси (кат. В)</p>
<p><span><input type="number" name="osagoru3" value="<?php echo get_option('osagoru3'); ?>" /></span> - Грузовой автомобиль грузоподъемностью до 16 т. (кат. С)</p>
<p><span><input type="number" name="osagoru4" value="<?php echo get_option('osagoru4'); ?>" /></span> - Грузовой автомобиль грузоподъемностью свыше 16т.</p>
<p><span><input type="number" name="osagoru5" value="<?php echo get_option('osagoru5'); ?>" /></span> - Автобус до 20 пассажирских мест</p>
<p><span><input type="number" name="osagoru6" value="<?php echo get_option('osagoru6'); ?>" /></span> - Автобус свыше 20 пассажирских мест</p>
</section>

<section id="content3">

<p><span><input type="number" name="osagoru7" value="<?php echo get_option('osagoru7'); ?>" /></span> - Легковой автомобиль (кат. В)</p>
<p><span><input type="number" name="osagoru8" value="<?php echo get_option('osagoru8'); ?>" /></span> - Легковой автомобиль в качестве такси (кат. В)</p>
<p><span><input type="number" name="osagoru9" value="<?php echo get_option('osagoru9'); ?>" /></span> - Грузовой автомобиль грузоподъемностью до 16 т. (кат. С)</p>
<p><span><input type="number" name="osagoru10" value="<?php echo get_option('osagoru10'); ?>" /></span> - Грузовой автомобиль грузоподъемностью свыше 16т.</p>
<p><span><input type="number" name="osagoru11" value="<?php echo get_option('osagoru11'); ?>" /></span> - Автобус до 20 пассажирских мест</p>
<p><span><input type="number" name="osagoru12" value="<?php echo get_option('osagoru12'); ?>" /></span> - Автобус свыше 20 пассажирских мест</p>

</section>

<section id="content4">

<div class="wpcmfadmintext">
E-mail: ad@wpcalc.com<br/> Web: wpcalc.com
</div>



<iframe src="http://wpcalc.com/plug/" width="100%" height="550px"></iframe>

</section>

            
   <div class="submit">
      <input name="save" type="submit" class="button-primary" value="<?php echo __('Save Draft'); ?>" />
  </div>      
        </form>
		
</div>