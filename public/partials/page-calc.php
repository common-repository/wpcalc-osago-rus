<div class="wpcmfcalc" id="wpcmfcalc">

<div class="wpcmf-col">
<div class="wpcmf-col-6"><b>Собственник</b></div><div class="wpcmf-col-6"><select id="owner" onchange="calcOsago();checkTB();" name="owner">
<option value="1">Физическое лицо</option>
<option value="1.7">Юридическое лицо</option>
</select>
</div>
</div>



<div class="wpcmf-col">
<div class="wpcmf-col-6"><b>Тип ТС</b></div><div class="wpcmf-col-6"><select id="tb" onchange="calcOsago();checkTB();" name="tb">
<option value="<?php echo get_option('osagoru1'); ?>:<?php echo get_option('osagoru7'); ?>:1">Легковой автомобиль (кат. В)</option>
<option value="<?php echo get_option('osagoru2'); ?>:<?php echo get_option('osagoru8'); ?>:1">Легковой автомобиль в качестве такси (кат. В)</option>
<option value="<?php echo get_option('osagoru3'); ?>:<?php echo get_option('osagoru9'); ?>:2">Грузовой автомобиль грузоподъемностью до 16 т. (кат. С)</option>
<option value="<?php echo get_option('osagoru4'); ?>:<?php echo get_option('osagoru10'); ?>:2">Грузовой автомобиль грузоподъемностью свыше 16т.</option>
<option value="<?php echo get_option('osagoru5'); ?>:<?php echo get_option('osagoru11'); ?>:3">Автобус до 20 пассажирских мест</option>
<option value="<?php echo get_option('osagoru6'); ?>:<?php echo get_option('osagoru12'); ?>:3">Автобус свыше 20 пассажирских мест</option>
</select>
</div>
</div>



<div class="wpcmf-col">
<div class="wpcmf-col-6"><b>Место регистрации</b></div><div class="wpcmf-col-6"><select id="kt" onchange="calcOsago();" name="kt">
                            <option value="2">Москва</option>
                            <option value="1.7">Московская область</option>
                            <option selected="selected" value="1.8">Санкт-Петербург</option>
                            <option value="1.6">Ленинградская область</option>
                            <optgroup label="Алтайский край">
                                <option value="1.7">Барнаул</option>
                                <option value="1.2">Бийск</option>
                                <option value="1.1">Заринск, Новоалтайск, Рубцовск</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Амурская область">
                                <option value="1.4">Благовещенск</option>
                                <option value="1.0">Белогорск, Свободный</option>
                                <option value="0.85">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Архангельская область">
                                <option value="1.8">Архангельск</option>
                                <option value="1.7">Северодвинск</option>
                                <option value="1.6">Котлас</option>
                                <option value="0.85">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Астраханская область">
                                <option value="1.4">Астрахань</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Белгородская область ">
                                <option value="1.3">Белгород</option>
                                <option value="1.0">Губкин, Старый Оскол</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Брянская область ">
                                <option value="1.5">Брянск</option>
                                <option value="1.0">Клинцы</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Владимирская область ">
                                <option value="1.6">Владимир </option>
                                <option value="1.2">Муром</option>
                                <option value="1.1">Гусь-Хрустальный</option>
                                <option value="1.0">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Волгоградская область">
                                <option value="1.3">Волгоград</option>
                                <option value="1.1">Волжский</option>
                                <option value="1.0">Камышин, Михайловка</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Вологодская область">
                                <option value="1.8">Череповец</option>
                                <option value="1.7">Вологда</option>
                                <option value="0.9">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Воронежская область">
                                <option value="1.4">Воронеж</option>
                                <option value="1.0">Борисоглебск, Лиски, Россошь</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Еврейская автономная область">
                                <option value="1.0">Биробиджан</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Забайкальский край">
                                <option value="1.1">Чита</option>
                                <option value="1.0">Краснокаменск</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Ивановская область">
                                <option value="1.8">Иваново</option>
                                <option value="1.1">Кинешма</option>
                                <option value="1.0">Шуя</option>
                                <option value="0.9">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Иркутская область">
                                <option value="1.7">Иркутск</option>
                                <option value="1.3">Шелехов</option>
                                <option value="1.2">Ангарск</option>
                                <option value="1.1">Усолье-Сибирское</option>
                                <option value="1.0">Братск, Тулун, Усть-Илимск, Усть-Кут, Черемхово</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Кабардино-Балкарская Республика">
                                <option value="1.0">Нальчик, Прохладный</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Калининградская область">
                                <option value="1.1">Калининград</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Калужская область">
                                <option value="1.3">Обнинск</option>
                                <option value="1.2">Калуга</option>
                                <option value="0.9">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Камчатский край">
                                <option value="1.1">Петропавловск-Камчатский</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Карачаево-Черкесская Республика">
                                <option value="1.0">Карачаево-Черкесская Республика</option>
                            </optgroup>
                            <optgroup label="Кемеровская область">
                                <option value="1.9">Кемерово</option>
                                <option value="1.8">Новокузнецк</option>
                                <option value="1.3">Белово, Березовский, Осинники, Прокопьевск, Междуреченск</option>
                                <option value="1.2">Анжеро-Судженск, Киселевск, Юрга</option>
                                <option value="1.1">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Кировская область">
                                <option value="1.4">Киров</option>
                                <option value="1.2">Кирово-Чепецк</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Костромская область">
                                <option value="1.3">Кострома</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Краснодарский край">
                                <option value="1.8">Краснодар, Новороссийск</option>
                                <option value="1.3">Анапа, Геленджик</option>
                                <option value="1.2">Армавир, Сочи, Туапсе</option>
                                <option value="1.1">Белореченск, Ейск, Кропоткин, Крымск, Курганинск, Лабинск, Славянск-на-Кубани, Тимашевск, Тихорецк</option>
                                <option value="1.0">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Красноярский край">
                                <option value="1.8">Красноярск</option>
                                <option value="1.3">Железногорск, Норильск</option>
                                <option value="1.1">Ачинск, Зеленогорск</option>
                                <option value="1.0">Канск, Лесосибирск, Минусинск, Назарово</option>
                                <option value="0.9">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Курганская область">
                                <option value="1.3">Курган</option>
                                <option value="1.0">Шадринск</option>
                                <option value="0.6">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Курская область">
                                <option value="1.2">Курск</option>
                                <option value="1.0">Железногорск</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Ленинградская область">
                                <option value="1.6">Ленинградская область</option>
                            </optgroup>
                            <optgroup label="Липецкая область">
                                <option value="1.5">Липецк</option>
                                <option value="1.0">Елец</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Магаданская область">
                                <option value="1.2">Магадан</option>
                                <option value="0.6">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Московская область">
                                <option value="1.7">Московская область</option>
                            </optgroup>
                            <optgroup label="Москва">
                                <option value="2">Москва</option>
                            </optgroup>
                            <optgroup label="Мурманская область">
                                <option value="1.7">Мурманск</option>
                                <option value="1.3">Североморск</option>
                                <option value="1.1">Апатиты, Мончегорск</option>
                                <option value="1.0">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Ненецкий автономный округ">
                                <option value="0.8">Ненецкий автономный округ</option>
                            </optgroup>
                            <optgroup label="Нижегородская область">
                                <option value="1.8">Нижний Новгород</option>
                                <option value="1.3">Балахна, Бор, Дзержинск</option>
                                <option value="1.2">Кстово</option>
                                <option value="1.1">Арзамас, Выкса, Саров</option>
                                <option value="1.0">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Новгородская область">
                                <option value="1.3">Великий Новгород</option>
                                <option value="1.0">Боровичи</option>
                                <option value="0.9">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Новосибирская область">
                                <option value="1.7">Новосибирск</option>
                                <option value="1.3">Бердск</option>
                                <option value="1.2">Искитим</option>
                                <option value="1.0">Куйбышев</option>
                                <option value="0.9">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Омская область">
                                <option value="1.6">Омск</option>
                                <option value="0.9">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Оренбургская область">
                                <option value="1.7">Оренбург</option>
                                <option value="1.1">Орск</option>
                                <option value="1.0">Бугуруслан, Бузулук, Новотроицк</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Орловская область">
                                <option value="1.2">Орел</option>
                                <option value="1.0">Ливны, Мценск</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Пензенская область">
                                <option value="1.4">Пенза</option>
                                <option value="1.2">Заречный</option>
                                <option value="1.0">Кузнецк</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Пермский край">
                                <option value="2.0">Пермь</option>
                                <option value="1.3">Березники, Краснокамск</option>
                                <option value="1.2">Соликамск</option>
                                <option value="1.0">Лысьва, Чайковский</option>
                                <option value="1.1">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Приморский край">
                                <option value="1.4">Владивосток</option>
                                <option value="1.0">Арсеньев, Артем, Находка, Спасск-Дальний, Уссурийск</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Псковская область">
                                <option value="1.2">Псков</option>
                                <option value="1.0">Великие Луки</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Адыгея">
                                <option value="1.1">Республика Адыгея</option>
                            </optgroup>
                            <optgroup label="Республика Алтай">
                                <option value="1.3">Горно-Алтайск</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Башкортостан">
                                <option value="1.8">Уфа</option>
                                <option value="1.3">Стерлитамак, Туймазы</option>
                                <option value="1.2">Благовещенск, Октябрьский</option>
                                <option value="1.1">Ишимбай, Кумертау, Салават</option>
                                <option value="1.0">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Бурятия">
                                <option value="1.3">Улан-Удэ</option>
                                <option value="0.6">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Дагестан">
                                <option value="1.0">Буйнакск, Дербент, Каспийск, Махачкала, Хасавюрт</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Ингушетия">
                                <option value="1.2">Малгобек</option>
                                <option value="1.0">Назрань</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Калмыкия">
                                <option value="1.3">Элиста</option>
                                <option value="0.6">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Карелия">
                                <option value="1.3">Петрозаводск</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Коми">
                                <option value="1.6">Сыктывкар</option>
                                <option value="1.3">Ухта</option>
                                <option value="1.0">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Марий Эл">
                                <option value="1.3">Йошкар-Ола</option>
                                <option value="1.0">Волжск</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Мордовия">
                                <option value="1.2">Саранск</option>
                                <option value="1.0">Рузаевка</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Саха (Якутия)">
                                <option value="2.0">Якутск</option>
                                <option value="1.3">Нерюнгри</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Северная Осетия - Алания">
                                <option value="1.0">Владикавказ</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Татарстан">
                                <option value="2.0">Казань</option>
                                <option value="1.7">Набережные Челны</option>
                                <option value="1.3">Альметьевск, Зеленодольск, Нижнекамск</option>
                                <option value="1.2">Елабуга</option>
                                <option value="1.0">Бугульма, Лениногорск, Чистополь</option>
                                <option value="1.1">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Тыва">
                                <option value="1.0">Кызыл</option>
                                <option value="0.6">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Республика Хакасия">
                                <option value="1.0">Абакан, Саяногорск, Черногорск</option>
                                <option value="0.6">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Ростовская область ">
                                <option value="1.8">Ростов-на-Дону</option>
                                <option value="1.3">Батайск</option>
                                <option value="1.2">Шахты</option>
                                <option value="1.1">Волгодонск, Гуково, Каменск-Шахтинский, Новочеркасск</option>
                                <option value="1.0">Новошахтинск, Сальск, Таганрог</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Рязанская область">
                                <option value="1.4">Рязань</option>
                                <option value="0.9">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Самарская область">
                                <option value="1.6">Самара</option>
                                <option value="1.5">Тольятти</option>
                                <option value="1.2">Чапаевск</option>
                                <option value="1.1">Новокуйбышевск, Сызрань</option>
                                <option value="0.9">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Санкт-Петербург">
                                <option value="1.8">Санкт-Петербург</option>
                            </optgroup>
                            <optgroup label="Саратовская область">
                                <option value="1.6">Саратов</option>
                                <option value="1.2">Энгельс</option>
                                <option value="1.0">Балаково, Балашов, Вольск</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Сахалинская область">
                                <option value="1.5">Южно-Сахалинск</option>
                                <option value="0.9">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Свердловская область">
                                <option value="1.8">Екатеринбург</option>
                                <option value="1.3">Березовский, Верхняя Пышма, Новоуральск, Первоуральск</option>
                                <option value="1.2">Верхняя Салда, Полевской</option>
                                <option value="1.1">Асбест, Ревда</option>
                                <option value="1.0">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Смоленская область">
                                <option value="1.2">Смоленск</option>
                                <option value="1.0">Вязьма, Рославль, Сафоново, Ярцево</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Ставропольский край">
                                <option value="1.2">Кисловодск, Михайловск, Ставрополь</option>
                                <option value="1.0">Буденновск, Георгиевск, Ессентуки, Минеральные воды, Невинномысск, Пятигорск</option>
                                <option value="0.7">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Тамбовская область">
                                <option value="1.2">Тамбов</option>
                                <option value="1.0">Мичуринск</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Тверская область">
                                <option value="1.5">Тверь</option>
                                <option value="1.0">Вышний Волочек, Кимры, Ржев</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Томская область">
                                <option value="1.6">Томск</option>
                                <option value="1.2">Северск</option>
                                <option value="0.9">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Тульская область">
                                <option value="1.5">Тула</option>
                                <option value="1.2">Узловая, Щекино</option>
                                <option value="1.0">Алексин, Ефремов, Новомосковск</option>
                                <option value="0.9">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Тюменская область">
                                <option value="2.0">Тюмень</option>
                                <option value="1.3">Тобольск</option>
                                <option value="1.1">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Удмуртская Республика">
                                <option value="1.6">Ижевск</option>
                                <option value="1.1">Воткинск</option>
                                <option value="1.0">Глазов, Сарапул</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Ульяновская область">
                                <option value="1.4">Ульяновск</option>
                                <option value="1.1">Димитровград</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Хабаровский край">
                                <option value="1.7">Хабаровск</option>
                                <option value="1.3">Комсомольск-на-Амуре</option>
                                <option value="1.0">Амурск</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Ханты-Мансийский автономный округ">
                                <option value="2.0">Сургут</option>
                                <option value="1.8">Нижневартовск</option>
                                <option value="1.5">Ханты-Мансийск</option>
                                <option value="1.3">Нефтеюганск, Нягань</option>
                                <option value="1.0">Когалым</option>
                                <option value="1.1">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Челябинская область">
                                <option value="2.0">Челябинск</option>
                                <option value="1.7">Магнитогорск</option>
                                <option value="1.5">Копейск</option>
                                <option value="1.3">Златоуст, Миасс</option>
                                <option value="1.1">Сатка, Чебаркуль</option>
                                <option value="1.0">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Чеченская Республика">
                                <option value="0.7">Чеченская Республика</option>
                            </optgroup>
                            <optgroup label="Чувашская Республика">
                                <option value="1.6">Чебоксары</option>
                                <option value="1.1">Новочебоксарск</option>
                                <option value="1.0">Канаш</option>
                                <option value="0.8">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Чукотский автономный округ">
                                <option value="0.7">Чукотский автономный округ</option>
                            </optgroup>
                            <optgroup label="Ямало-Ненецкий автономный округ ">
                                <option value="1.7">Ноябрьск</option>
                                <option value="1.0">Новый Уренгой</option>
                                <option value="1.1">Прочие города и населенные пункты</option>
                            </optgroup>
                            <optgroup label="Ярославская область">
                                <option value="1.5">Ярославль</option>
                                <option value="0.9">Прочие города и населенные пункты</option>
                            </optgroup>
                        </select>
</div>
</div>

<div class="wpcmf-col">
<div class="wpcmf-col-6"><b>Мощность двигателя</b></div><div class="wpcmf-col-6"><select id="km" onchange="calcOsago();" name="km">
<option value="0.6">до 50 включительно</option>
<option value="1">от 50 до 70 включительно</option>
<option value="1.1">от 70 до 100 включительно</option>
<option value="1.2">от 100 до 120 включительно</option>
<option value="1.4">от 120 до 150 включительно</option>
<option value="1.6">свыше 150</option>
</select>

</div>
</div>

<div class="wpcmf-col">
<div class="wpcmf-col-6"><b>Количество допущенных лиц</b></div><div class="wpcmf-col-6"><select id="ko" onchange="calcOsago();" name="ko">
<option value="1">Ограниченное</option>
<option value="1.8">Неограниченное</option>
</select>
</div>
</div>

<div class="wpcmf-col">
<div class="wpcmf-col-6"><b>Минимальный возраст и стаж допущенных к управлению</b></div><div class="wpcmf-col-6"><select id="kvs" onchange="calcOsago();" name="kvs" style="background: none repeat scroll 0% 0% rgb(255, 255, 255);">
<option value="1.8">до 22 лет включительно со стажем вождения до 3 лет включительно</option>
<option value="1.6">до 22-х лет включительно со стажем вождения свыше 3 лет</option>
<option value="1.7">более 22 лет со стажем вождения до 3 лет включительно</option>
<option value="1">более 22 лет со стажем вождения свыше 3 лет</option>
</select>
</div>
</div>

<div class="wpcmf-col">
<div class="wpcmf-col-6"><b>Сколько лет безаварийной езды</b></div><div class="wpcmf-col-6"><select id="kbm" onchange="calcOsago();" name="kbm">
<option value="1">менее 1 года</option>
<option value="0.95">2-ой год</option>
<option value="0.9">3-ий год</option>
<option value="0.85">4-ый год</option>
<option value="0.8">5-ый год</option>
<option value="0.75">6-ой год</option>
<option value="0.7">7-ой год</option>
<option value="0.65">8-ой год</option>
<option value="0.6">9-ый год</option>
<option value="0.55">10-ый год</option>
</select>
</div>
</div>

<div class="wpcmf-col">
<div class="wpcmf-col-6"><b>Срок страхования</b></div><div class="wpcmf-col-6">
<select id="kp" onchange="calcOsago();" name="kp">
<option value="1">1 год</option>
<option value="0.95">9 мес.</option>
<option value="0.9">8 мес.</option>
<option value="0.8">7 мес.</option>
<option value="0.7">6 мес.</option>
<option value="0.65">5 мес.</option>
<option value="0.6">4 мес.</option>
<option value="0.5">3 мес.</option>
</select>
</div>
</div>

<div class="wpcmf-col">
<div class="wpcmf-col-6"><b>Страховой платеж</b></div><div class="wpcmf-col-6"><div id="wpcalc-result" style="font-size:<?php echo get_option('wpcalc_osago_rus_size'); ?>px;color:<?php echo get_option('wpcalc_osago_rus_color'); ?>"></div>
</div>
</div>

</div>

