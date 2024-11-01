
function Disable_Object(x) {
    if (document.getElementById(x).disabled == false) {
        document.getElementById(x).disabled = true;
        document.getElementById(x).style.background = "#cccccc";
    }
    else {
        document.getElementById(x).disabled = false;
        document.getElementById(x).style.background = "#ffffff";
    }
}
function checkTB() {
    if (jQuery("#owner").val() == 1) {
        jQuery("#tbval").text(jQuery("#tb").val().split(':')[0]);
        jQuery("#tbval_text").val("ТБ=" + jQuery("#tb").val().split(':')[0]);
    }
    else {
        jQuery("#tbval").text(jQuery("#tb").val().split(':')[1]);
        jQuery("#tbval_text").val("ТБ=" + jQuery("#tb").val().split(':')[1]);
    }
    jQuery("#owner_text").val(jQuery("#owner :selected").text());
    jQuery("#tb_text").val(jQuery("#tb :selected").text());
}
function calcOsago() {
    osago = 0;
    osago2 = 0;
    kt_ = jQuery("#kt").val() * 1; //Место регистрации
    km_ = jQuery("#km").val() * 1; //Мощность двигателя
    ko_ = jQuery("#ko").val() * 1; //Количество допущенных лиц
    kbm_ = jQuery("#kbm").val() * 1; //Сколько лет безаварийной езды
    kvs_ = jQuery("#kvs").val() * 1; //Возраст и стаж младшего водителя
    kp_ = jQuery("#kp").val() * 1; //Срок страхования
    //ks_=jQuery("#ks").val()*1; //Период использвания
    ks_ = 1
    tb_ = jQuery("#tb").val().split(':')[2] * 1; //Тип ТС
    if (jQuery("#owner").val() == 1) { // если физлицо
        //alert(jQuery("#owner").val());
        tb1 = jQuery("#tb").val().split(':')[0] * 1;
        if (tb_ == 1) { // если легковушка
            if (ko_ == 1) { // если ограниченно
                document.getElementById("kvs").disabled = false;
                document.getElementById("kvs").style.background = "#ffffff";
                osago = tb1 * kt_ * kvs_ * km_ * ks_ * kbm_ * kp_;
            }
            else { // если неограниченно
                document.getElementById("kvs").disabled = true;
                document.getElementById("kvs").style.background = "#cccccc";
                osago = tb1 * kt_ * ko_ * km_ * ks_ * kbm_ * kp_;
            }
        }
        else { // если грузовик или автобус
            if (ko_ == 1) { // если ограниченно
                osago = tb1 * kt_ * kvs_ * ks_ * kbm_ * kp_;
            }
            else { // если неограниченно
                osago = tb1 * kt_ * ko_ * ks_ * kbm_ * kp_;
            }
        }
    }
    else { // если юрлицо
        tb1 = jQuery("#tb").val().split(':')[1] * 1;
        document.getElementById("kvs").disabled = true;
        document.getElementById("kvs").style.background = "#cccccc";
        jQuery("#ko").val("1.8");
        jQuery('#koval').text(jQuery("#ko").val());
        ko_ = jQuery("#ko").val() * 1;
        if (tb_ == 1) { // если легковушка
            osago = tb1 * kt_ * ko_ * km_ * ks_ * kbm_ * kp_;
        }
        else { // если грузовик или автобус
            osago = tb1 * kt_ * ko_ * ks_ * kbm_ * kp_;
        }
    }
    //alert(tb)
    osago = osago.toFixed(2);
    jQuery("#wpcalc-result").text(osago);
	
	
	
}
jQuery(document).ready(function () {
    calcOsago();
    checkTB();
    
});










   