<?php get_header(); ?>
<?php
$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
?>

    <main id="main-content" class="index-main">
        <section class="page__landing landings">
            <h2 class="landings__title" aria-level="2" role="heading" itemprop="name">
                <?= esc_html($hero_title); ?>
                <span itemprop="jobTitle"><?= esc_html($hero_subtitle); ?></span>
            </h2>
            <div class="landing__boat">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 0 548.9 561.3">
                    <defs>
                        <linearGradient id="New_swatch_196" x1="-2863.3" x2="-2855.9" y1="-793.6" y2="-793.6"
                                        data-name="New swatch 196"
                                        gradientTransform="matrix(.3244 .234 -.0247 .9685 1230.5 1855.8)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#e3e6e5"/>
                            <stop offset="1" stop-color="#cfd0d0"/>
                            <stop offset="1" stop-color="#cfd0d0"/>
                        </linearGradient>
                        <linearGradient xlink:href="#New_swatch_196" id="New_swatch_1961" x1="-2846.7" x2="-2839.3"
                                        y1="-797" y2="-797" data-name="New swatch 196"/>
                        <linearGradient xlink:href="#New_swatch_196" id="New_swatch_1962" x1="-2829.7" x2="-2822.3"
                                        y1="-800.9" y2="-800.9" data-name="New swatch 196"/>
                        <linearGradient xlink:href="#New_swatch_196" id="New_swatch_1963" x1="-2812.7" x2="-2805.3"
                                        y1="-804.6" y2="-804.6" data-name="New swatch 196"/>
                        <linearGradient id="New_swatch_272" x1="-2972.7" x2="-2972.7" y1="-1006.9" y2="-960.6"
                                        data-name="New swatch 272"
                                        gradientTransform="matrix(.3082 .255 -.0235 .889 1269.1 2188.6)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#e89931"/>
                            <stop offset="1" stop-color="#bf6c02"/>
                        </linearGradient>
                        <linearGradient xlink:href="#New_swatch_272" id="New_swatch_2721" x1="-3010.2" x2="-3014.8"
                                        y1="-1017.3" y2="-995.6" data-name="New swatch 272"/>
                        <linearGradient xlink:href="#New_swatch_272" id="New_swatch_2722" x1="-3010.2" x2="-3014.8"
                                        y1="-1017.3" y2="-995.6" data-name="New swatch 272"/>
                        <linearGradient id="New_swatch_128" x1="-2880.1" x2="-2949.7" y1="-945.7" y2="-904.1"
                                        data-name="New swatch 128"
                                        gradientTransform="matrix(.3244 .234 -.0247 .9685 1230.5 1855.8)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#f2e3c2"/>
                            <stop offset="1" stop-color="#7c6e7b"/>
                        </linearGradient>
                        <linearGradient xlink:href="#New_swatch_128" id="New_swatch_1281" x1="-2882.9" x2="-2927.7"
                                        y1="-940.9" y2="-914.1" data-name="New swatch 128"/>
                        <linearGradient id="New_swatch_267" x1="-2864.4" x2="-2855.8" y1="-800.7" y2="-800.7"
                                        data-name="New swatch 267"
                                        gradientTransform="matrix(.3244 .234 -.0247 .9685 1230.5 1855.8)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#b56f02"/>
                            <stop offset="1" stop-color="#530f00"/>
                        </linearGradient>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_2671" x1="-2847.8" x2="-2839.2"
                                        y1="-804.6" y2="-804.6" data-name="New swatch 267"/>
                        <linearGradient xlink:href="#New_swatch_128" id="New_swatch_1282" x1="-2885.7" x2="-2906.7"
                                        y1="-936.4" y2="-923.9" data-name="New swatch 128"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_2672" x1="-2831.8" x2="-2823.1"
                                        y1="-808.5" y2="-808.5" data-name="New swatch 267"/>
                        <linearGradient xlink:href="#New_swatch_128" id="New_swatch_1283" x1="-2881.7" x2="-2893.1"
                                        y1="-936" y2="-929.2" data-name="New swatch 128"/>
                        <linearGradient id="New_swatch_264" x1="-2866.3" x2="-2858.5" y1="-893.7" y2="-893.7"
                                        data-name="New swatch 264"
                                        gradientTransform="matrix(.3244 .234 -.0247 .9685 1230.5 1855.8)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#57311b"/>
                            <stop offset="1" stop-color="#0b0b0a"/>
                        </linearGradient>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_2641" x1="-2877" x2="-2869.2"
                                        y1="-890.8" y2="-890.8" data-name="New swatch 264"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_2642" x1="-2887.3" x2="-2879.5"
                                        y1="-888.2" y2="-888.2" data-name="New swatch 264"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_2643" x1="-2898.4" x2="-2890.6"
                                        y1="-885.3" y2="-885.3" data-name="New swatch 264"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_2644" x1="-2911.2" x2="-2906.9"
                                        y1="-968.6" y2="-968.6" data-name="New swatch 264"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_2645" x1="-2916.6" x2="-2912.3"
                                        y1="-967.2" y2="-967.2" data-name="New swatch 264"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_2646" x1="-2922.3" x2="-2918"
                                        y1="-965.7" y2="-965.7" data-name="New swatch 264"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_2647" x1="-2927.9" x2="-2923.6"
                                        y1="-964.2" y2="-964.2" data-name="New swatch 264"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_2673" x1="-2815.2" x2="-2806.6"
                                        y1="-812.8" y2="-812.8" data-name="New swatch 267"/>
                        <linearGradient id="New_swatch_263" x1="-274.9" x2="-249.3" y1="357" y2="398.4"
                                        data-name="New swatch 263" gradientTransform="translate(688.2)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#a36203"/>
                            <stop offset="1" stop-color="#530f00"/>
                        </linearGradient>
                        <linearGradient id="New_swatch_277" x1="-249.8" x2="-264.4" y1="276.4" y2="377.5"
                                        data-name="New swatch 277" gradientTransform="translate(688.2)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#cc7a00"/>
                            <stop offset="1" stop-color="#8f4700"/>
                        </linearGradient>
                        <linearGradient id="New_swatch_259" x1="-553" x2="-545.4" y1="373.9" y2="384.4"
                                        data-name="New swatch 259" gradientTransform="translate(688.2)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#e07a02"/>
                            <stop offset="1" stop-color="#b44602"/>
                        </linearGradient>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_2591" x1="-541.5" x2="-546.2"
                                        y1="363.1" y2="378.2" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_2592" x1="-596.4" x2="-587.3"
                                        y1="373.9" y2="386.5" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_2593" x1="-582.7" x2="-588.4"
                                        y1="361" y2="379.2" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_2594" x1="-584.6" x2="-575.5"
                                        y1="373.9" y2="386.5" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_2595" x1="-571" x2="-576.6"
                                        y1="361"
                                        y2="379.2" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_2596" x1="-544.3" x2="-536.8"
                                        y1="372.9" y2="383.4" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_2597" x1="-532.6" x2="-537.8"
                                        y1="360.8" y2="377.3" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_2598" x1="-513.9" x2="-506.3"
                                        y1="372.4" y2="382.9" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_2599" x1="-502.5" x2="-507.2"
                                        y1="361.7" y2="376.8" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25910" x1="-522.6" x2="-515"
                                        y1="372.4" y2="382.9" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25911" x1="-511.2" x2="-515.9"
                                        y1="361.7" y2="376.8" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25912" x1="-506" x2="-498.5"
                                        y1="372.1" y2="382.7" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25913" x1="-494.7" x2="-499.4"
                                        y1="361.4" y2="376.5" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25914" x1="-437.9" x2="-430.3"
                                        y1="590.3" y2="600.9" data-name="New swatch 259"
                                        gradientTransform="rotate(-2.3 -5568.68 -15167.18)"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25915" x1="-426.6" x2="-431.2"
                                        y1="579.6" y2="594.7" data-name="New swatch 259"
                                        gradientTransform="rotate(-2.3 -5568.68 -15167.18)"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25916" x1="-405.8" x2="-398.2"
                                        y1="677.6" y2="688.1" data-name="New swatch 259"
                                        gradientTransform="rotate(-3.3 -5464.09 -9989.93)"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25917" x1="-394.4" x2="-399.1"
                                        y1="666.9" y2="682" data-name="New swatch 259"
                                        gradientTransform="rotate(-3.3 -5464.09 -9989.93)"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25918" x1="-386.7" x2="-379"
                                        y1="720.8" y2="731.4" data-name="New swatch 259"
                                        gradientTransform="rotate(-3.8 -5392.23 -8431)"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25919" x1="-375.3" x2="-380"
                                        y1="710.2" y2="725.2" data-name="New swatch 259"
                                        gradientTransform="rotate(-3.8 -5392.23 -8431)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_2648" x1="-320.2" x2="-307.5"
                                        y1="29" y2="29" data-name="New swatch 264"
                                        gradientTransform="rotate(3.9 -4060.56 11668.01)"/>
                        <linearGradient id="linear-gradient" x1="-522.9" x2="-535.6" y1="326.9" y2="380"
                                        gradientTransform="translate(688.2)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#e07a02"/>
                            <stop offset="1" stop-color="#6e2a00"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient1" x1="-513.8" x2="-534.3" y1="295.2" y2="373.3"
                                        gradientTransform="translate(688.2)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#e07a02"/>
                            <stop offset="1" stop-color="#8f3700"/>
                        </linearGradient>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25920" x1="-604.3" x2="-592.4"
                                        y1="374" y2="390.6" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25921" x1="-586.4" x2="-593.8"
                                        y1="357" y2="380.9" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25922" x1="-592.2" x2="-580.2"
                                        y1="369.2" y2="385.8" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25923" x1="-574.2" x2="-581.6"
                                        y1="352.2" y2="376.1" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_2631" x1="-541.4" x2="-511.4"
                                        y1="309.1" y2="309.1" data-name="New swatch 263"/>
                        <linearGradient id="linear-gradient2" x1="-553.5" x2="-570.6" y1="98.2" y2="146.6"
                                        gradientTransform="translate(688.2)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#403f3f"/>
                            <stop offset="1" stop-color="#262626" stop-opacity="0"/>
                        </linearGradient>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient3" x1="-547.7" x2="-554.5"
                                        y1="123.6" y2="143"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient4" x1="-596.4" x2="-601.9"
                                        y1="136.5" y2="152"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient5" x1="-580.4" x2="-584.6"
                                        y1="140.9" y2="152.6"/>
                        <linearGradient id="linear-gradient6" x1="-552.9" x2="-550.8" y1="122" y2="137.8"
                                        gradientTransform="translate(688.2)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#403f3f" stop-opacity="0"/>
                            <stop offset="1" stop-color="#262626"/>
                        </linearGradient>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient7" x1="-576.9" x2="-575.6"
                                        y1="136.7" y2="146.3"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient8" x1="-570.2" x2="-573.8"
                                        y1="124" y2="134.3"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient9" x1="-551.9" x2="-553.1"
                                        y1="131.7" y2="135"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_2674" x1="-629" x2="-475.2"
                                        y1="308.4" y2="308.4" data-name="New swatch 267"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_2649" x1="-10315.1"
                                        x2="-10206.9"
                                        y1="371.4" y2="371.4" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25924" x1="-578.8" x2="-566.8"
                                        y1="365.5" y2="382.1" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25925" x1="-560.8" x2="-568.2"
                                        y1="348.4" y2="372.4" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25926" x1="-564.5" x2="-552.5"
                                        y1="360.4" y2="377" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25927" x1="-546.5" x2="-553.9"
                                        y1="343.4" y2="367.3" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25928" x1="-570" x2="-573.1"
                                        y1="336.1" y2="364.3" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25929" x1="-578.8" x2="-570.4"
                                        y1="351.4" y2="385.7" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25930" x1="-550.1" x2="-549"
                                        y1="345.6" y2="359.7" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_2675" x1="-612.4" x2="-524.6"
                                        y1="173.2" y2="173.2" data-name="New swatch 267"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient10" x1="-490.8"
                                        x2="-573.2"
                                        y1="97.3" y2="330.2"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient11" x1="-510.4"
                                        x2="-561.9"
                                        y1="75.2" y2="267.7"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient12" x1="-10276.7"
                                        x2="-10266.6" y1="258.6" y2="324.5"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_2632" x1="-354.3" x2="-447.8"
                                        y1="517.6" y2="673.5" data-name="New swatch 263"
                                        gradientTransform="rotate(-2.7 -5570.58 -12511.75)"/>
                        <linearGradient id="linear-gradient13" x1="-389.4" x2="-470.5" y1="608.9" y2="690.8"
                                        gradientTransform="rotate(-2.7 -5570.58 -12511.75)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#a36203" stop-opacity="0"/>
                            <stop offset="1" stop-color="#530f00"/>
                        </linearGradient>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_2633" x1="-557.8" x2="-592.3"
                                        y1="355.8" y2="440.5" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient14" x1="-573.7" x2="-577"
                                        y1="389.3" y2="442.7" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient15" x1="-574.2"
                                        x2="-582.2"
                                        y1="371.3" y2="408.6" gradientTransform="translate(688.2)"/>
                        <linearGradient id="linear-gradient16" x1="-363.7" x2="-398.6" y1="577" y2="658.8"
                                        gradientTransform="rotate(-2.7 -5570.58 -12511.75)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#a36203"/>
                            <stop offset="1" stop-color="#330900"/>
                        </linearGradient>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_2634" x1="-418.3" x2="-495.9"
                                        y1="342.7" y2="420.3" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient17" x1="-485.1"
                                        x2="-481.7"
                                        y1="395.1" y2="430.2" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_2635" x1="-534.4" x2="-477.7"
                                        y1="60.2" y2="60.2" data-name="New swatch 263"
                                        gradientTransform="rotate(1.9 -5270.86 21906.02)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_2636" x1="-535.8" x2="-565.3"
                                        y1="374.5" y2="467.9" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient18" x1="-549.6"
                                        x2="-552.7"
                                        y1="413.8" y2="464.3" gradientTransform="translate(688.2)"/>
                        <linearGradient id="linear-gradient19" x1="-557" x2="-556" y1="415.9" y2="424.9"
                                        gradientTransform="translate(688.2)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#a36203"/>
                            <stop offset="1" stop-color="#530f00" stop-opacity="0"/>
                        </linearGradient>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_2637" x1="-554.4" x2="-561.4"
                                        y1="372.5" y2="468.7" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient20" x1="-555.5"
                                        x2="-557.5"
                                        y1="411.2" y2="443" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient21" x1="-559.6"
                                        x2="-558.9"
                                        y1="409.2" y2="427.9" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient22" x1="-561.5"
                                        x2="-561.5"
                                        y1="392.5" y2="419" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_2771" x1="-553.8" x2="-623"
                                        y1="348.9" y2="440.9" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_2772" x1="-10275.3"
                                        x2="-10276.4"
                                        y1="365.5" y2="397.8" data-name="New swatch 277"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient id="linear-gradient23" x1="-10269.6" x2="-10282.5" y1="354.1" y2="426.4"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#cc7a00" stop-opacity="0"/>
                            <stop offset="1" stop-color="#8f4700"/>
                        </linearGradient>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_2773" x1="-548.5" x2="-573.8"
                                        y1="360" y2="433.2" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_2774" x1="-557.2" x2="-553.4"
                                        y1="386.4" y2="395.3" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_2775" x1="-550.5" x2="-575.5"
                                        y1="347.6" y2="483.6" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_2776" x1="-497.9" x2="-535.2"
                                        y1="368.4" y2="461.4" data-name="New swatch 277"/>
                        <linearGradient id="linear-gradient24" x1="-559.6" x2="-551.4" y1="355.1" y2="422.9"
                                        gradientTransform="translate(688.2)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#cc7a00"/>
                            <stop offset="1" stop-color="#8f4700" stop-opacity="0"/>
                        </linearGradient>
                        <linearGradient xlink:href="#New_swatch_196" id="New_swatch_1964" x1="-11744.1"
                                        x2="-11741.2"
                                        y1="2311.8" y2="2311.8" data-name="New swatch 196"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_196" id="New_swatch_1965" x1="-11737.5"
                                        x2="-11734.7"
                                        y1="2310.6" y2="2310.6" data-name="New swatch 196"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_196" id="New_swatch_1966" x1="-11730.7"
                                        x2="-11727.9"
                                        y1="2309.5" y2="2309.5" data-name="New swatch 196"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_196" id="New_swatch_1967" x1="-11723.9"
                                        x2="-11721.2"
                                        y1="2308.4" y2="2308.4" data-name="New swatch 196"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_272" id="New_swatch_2723" x1="-11748" x2="-11748"
                                        y1="2437.7" y2="2452.7" data-name="New swatch 272"
                                        gradientTransform="rotate(156.9 -6094 203.4)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_272" id="New_swatch_2724" x1="-11762" x2="-11764.3"
                                        y1="2430.6" y2="2441.6" data-name="New swatch 272"
                                        gradientTransform="rotate(156.9 -6094 203.4)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_272" id="New_swatch_2725" x1="-11762" x2="-11764.3"
                                        y1="2430.6" y2="2441.6" data-name="New swatch 272"
                                        gradientTransform="rotate(156.9 -6094 203.4)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_272" id="New_swatch_2726" x1="-11751.3"
                                        x2="-11748.8"
                                        y1="2418.6" y2="2453.6" data-name="New swatch 272"
                                        gradientTransform="rotate(156.9 -6094 203.4)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_128" id="New_swatch_1284" x1="-11814.6"
                                        x2="-11818.9"
                                        y1="2179.9" y2="2182.4" data-name="New swatch 128"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_128" id="New_swatch_1285" x1="-11809.7"
                                        x2="-11817.3"
                                        y1="2178.4" y2="2182.9" data-name="New swatch 128"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_2676" x1="-11746.3"
                                        x2="-11741.4"
                                        y1="2303.6" y2="2303.6" data-name="New swatch 267"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_2677" x1="-11739.9"
                                        x2="-11734.8"
                                        y1="2302.5" y2="2302.5" data-name="New swatch 267"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_128" id="New_swatch_1286" x1="-11802.4"
                                        x2="-11819.1"
                                        y1="2175.3" y2="2185.3" data-name="New swatch 128"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_2678" x1="-11733.6"
                                        x2="-11728.5"
                                        y1="2301.3" y2="2301.3" data-name="New swatch 267"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_128" id="New_swatch_1287" x1="-11794.7"
                                        x2="-11821.4"
                                        y1="2171.9" y2="2187.9" data-name="New swatch 128"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26410" x1="-11402.9"
                                        x2="-11399.8"
                                        y1="1463.5" y2="1463.5" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -11056 -1160.6)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26411" x1="-11407.1" x2="-11404"
                                        y1="1464.6" y2="1464.6" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -11055.9 -1161.6)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26412" x1="-11411.2" x2="-11408"
                                        y1="1465.6" y2="1465.6" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -11055.8 -1162.5)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26413" x1="-11415.6"
                                        x2="-11412.4"
                                        y1="1466.6" y2="1466.6" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -11055.7 -1163.6)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26414" x1="-10735.7"
                                        x2="-10734.2"
                                        y1="587.3" y2="587.3" data-name="New swatch 264"
                                        gradientTransform="rotate(176 -5292.53 6.76)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26415" x1="-10737.8"
                                        x2="-10736.3"
                                        y1="587.9" y2="587.9" data-name="New swatch 264"
                                        gradientTransform="rotate(176 -5292.53 6.76)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26416" x1="-10739.8"
                                        x2="-10738.3"
                                        y1="588.4" y2="588.4" data-name="New swatch 264"
                                        gradientTransform="rotate(176 -5292.53 6.76)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26417" x1="-10741.9"
                                        x2="-10740.3"
                                        y1="588.9" y2="588.9" data-name="New swatch 264"
                                        gradientTransform="rotate(176 -5292.53 6.76)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_2679" x1="-11727.2" x2="-11722"
                                        y1="2299.7" y2="2299.7" data-name="New swatch 267"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_2777" x1="-486.3" x2="-507.3"
                                        y1="374" y2="418" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#linear-gradient23" id="linear-gradient25" x1="-497.1"
                                        x2="-516.3"
                                        y1="386.6" y2="462" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_2778" x1="-511.6" x2="-500.8"
                                        y1="402.4" y2="427.4" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_2638" x1="-584.6" x2="-537.7"
                                        y1="483.8" y2="505.4" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26418" x1="-585.6" x2="-517.9"
                                        y1="487.2" y2="487.2" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_2639" x1="-601.6" x2="-510.2"
                                        y1="440" y2="514.8" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient26" x1="-538.8"
                                        x2="-541.6"
                                        y1="486" y2="531.8" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26419" x1="-590.2" x2="-494.4"
                                        y1="471.6" y2="471.6" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26310" x1="-381.2" x2="-285.8"
                                        y1="345.6" y2="478.3" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26311" x1="-420.4" x2="-449.5"
                                        y1="310" y2="571.9" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient27" x1="-439" x2="-444.2"
                                        y1="475.3" y2="558.6" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient19" id="linear-gradient28" x1="-443.1"
                                        x2="-437.5"
                                        y1="460.6" y2="509.4"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26312" x1="-428.6" x2="-437.7"
                                        y1="320.5" y2="556.7" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient29" x1="-431.5"
                                        x2="-437.1"
                                        y1="453.2" y2="544.3" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient30" x1="-340" x2="-350"
                                        y1="470.7" y2="490" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient31" x1="-473.3"
                                        x2="-490.2"
                                        y1="464.1" y2="496.8" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient19" id="linear-gradient32" x1="-423.4" x2="-420"
                                        y1="446.7" y2="476.3"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26313" x1="-312.8" x2="-288.9"
                                        y1="445.4" y2="476.4" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient33" x1="-298.7" x2="-300"
                                        y1="472.9" y2="475.3" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26314" x1="-299.8" x2="-275.4"
                                        y1="419.1" y2="455.9" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient34" x1="-285.6"
                                        x2="-286.8"
                                        y1="450.3" y2="452.6" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26315" x1="-292.5" x2="-267.7"
                                        y1="391.6" y2="431.8" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient35" x1="-276" x2="-276.7"
                                        y1="425.4" y2="426.9" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26316" x1="-288.6" x2="-258.4"
                                        y1="386.8" y2="386.8" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient36" x1="-268.7"
                                        x2="-269.7"
                                        y1="397.4" y2="399.2" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26317" x1="-433.9" x2="-433.9"
                                        y1="327.4" y2="617.1" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient19" id="linear-gradient37" x1="-345.5"
                                        x2="-381.6"
                                        y1="366" y2="499.3"/>
                        <linearGradient xlink:href="#linear-gradient19" id="linear-gradient38" x1="-368.5" x2="-366"
                                        y1="421.4" y2="443.2"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient39" x1="-436.7"
                                        x2="-441.9"
                                        y1="433.6" y2="516.8" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26318" x1="-489.5" x2="-459.6"
                                        y1="401.5" y2="453.7" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26319" x1="-471" x2="-451.6"
                                        y1="490.1" y2="425.1" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient40" x1="-467" x2="-458.9"
                                        y1="472.3" y2="449.4" gradientTransform="translate(688.2)"/>
                        <linearGradient id="linear-gradient41" x1="-458.8" x2="-450.5" y1="451.3" y2="473.6"
                                        gradientTransform="translate(688.2)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#a36203"/>
                            <stop offset=".3" stop-color="#8b4e02"/>
                            <stop offset=".8" stop-color="#4f1d00"/>
                            <stop offset="1" stop-color="#380a00"/>
                        </linearGradient>
                        <linearGradient id="New_swatch_269" x1="-456.7" x2="-495.6" y1="483.2" y2="455.2"
                                        data-name="New swatch 269" gradientTransform="translate(688.2)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#371a00"/>
                            <stop offset="1" stop-color="#643700"/>
                        </linearGradient>
                        <linearGradient id="New_swatch_19" x1="-459.3" x2="-464.9" y1="459.3" y2="436.6"
                                        data-name="New swatch 19" gradientTransform="translate(688.2)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#384658"/>
                            <stop offset="1" stop-color="#525b70"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient42" x1="-463.6" x2="-467.5" y1="447.9" y2="432.4"
                                        gradientTransform="translate(688.2)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#384658" stop-opacity="0"/>
                            <stop offset="1" stop-color="#525b70"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient43" x1="-455.2" x2="-465.7" y1="466.1" y2="443.9"
                                        gradientTransform="translate(688.2)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#384658"/>
                            <stop offset="1" stop-color="#525b70" stop-opacity="0"/>
                        </linearGradient>
                        <linearGradient id="New_swatch_261" x1="-392.5" x2="-384.7" y1="688.4" y2="716.6"
                                        data-name="New swatch 261"
                                        gradientTransform="rotate(-2.7 -5373.2 -12239.62)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#edac20"/>
                            <stop offset="1" stop-color="#c27002"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient44" x1="-386.3" x2="-403.7" y1="702.5" y2="683.4"
                                        gradientTransform="rotate(-2.7 -5373.2 -12239.62)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#131f2e"/>
                            <stop offset="1" stop-color="#525b70"/>
                        </linearGradient>
                        <linearGradient xlink:href="#linear-gradient43" id="linear-gradient45" x1="-385.1"
                                        x2="-392.5"
                                        y1="708.9" y2="693.3" gradientTransform="rotate(-2.7 -5373.2 -12239.62)"/>
                        <linearGradient id="linear-gradient46" x1="-391.2" x2="-389.3" y1="684.3" y2="703.1"
                                        gradientTransform="rotate(-2.7 -5373.2 -12239.62)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#edac20"/>
                            <stop offset="1" stop-color="#c27002" stop-opacity="0"/>
                        </linearGradient>
                        <linearGradient id="linear-gradient47" x1="-389.6" x2="-386.8" y1="698.6" y2="707.7"
                                        gradientTransform="rotate(-2.7 -5373.2 -12239.62)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#edac20" stop-opacity="0"/>
                            <stop offset="1" stop-color="#c27002"/>
                        </linearGradient>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient48" x1="-513.8"
                                        x2="-533.8"
                                        y1="419.9" y2="570.2" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient49" x1="-513.7"
                                        x2="-524.6"
                                        y1="452.7" y2="473.7" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26320" x1="-560.8" x2="-539.8"
                                        y1="417.1" y2="453.7" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26321" x1="-544.1" x2="-538.6"
                                        y1="494.3" y2="441" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient50" x1="-543" x2="-537.1"
                                        y1="468.4" y2="451.5" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient41" id="linear-gradient51" x1="-561.1"
                                        x2="-530.3"
                                        y1="489.3" y2="465"/>
                        <linearGradient xlink:href="#New_swatch_269" id="New_swatch_2691" x1="-535.7" x2="-563"
                                        y1="476.8" y2="457.1" data-name="New swatch 269"/>
                        <linearGradient xlink:href="#New_swatch_19" id="New_swatch_191" x1="-541.4" x2="-545.9"
                                        y1="458.2" y2="440.4" data-name="New swatch 19"/>
                        <linearGradient xlink:href="#linear-gradient42" id="linear-gradient52" x1="-544.7"
                                        x2="-547.8"
                                        y1="449.2" y2="436.9"/>
                        <linearGradient xlink:href="#linear-gradient43" id="linear-gradient53" x1="-537.5"
                                        x2="-545.9"
                                        y1="463.2" y2="445.6"/>
                        <linearGradient xlink:href="#New_swatch_261" id="New_swatch_2611" x1="-163" x2="-156.8"
                                        y1="833.6" y2="856.1" data-name="New swatch 261"
                                        gradientTransform="rotate(-4.1 -5474.3 -3400.26)"/>
                        <linearGradient xlink:href="#linear-gradient44" id="linear-gradient54" x1="-158.1"
                                        x2="-171.8"
                                        y1="844.7" y2="829.8" gradientTransform="rotate(-4.1 -5474.3 -3400.26)"/>
                        <linearGradient xlink:href="#linear-gradient43" id="linear-gradient55" x1="-157.1" x2="-163"
                                        y1="849.9" y2="837.4" gradientTransform="rotate(-4.1 -5474.3 -3400.26)"/>
                        <linearGradient xlink:href="#linear-gradient46" id="linear-gradient56" x1="-162" x2="-160.5"
                                        y1="830.3" y2="845.3" gradientTransform="rotate(-4.1 -5474.3 -3400.26)"/>
                        <linearGradient xlink:href="#linear-gradient47" id="linear-gradient57" x1="-429" x2="-426.7"
                                        y1="841.6" y2="849" gradientTransform="rotate(-4.1 -5609.48 -7243)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient58" x1="-391.4"
                                        x2="-398.9"
                                        y1="457.2" y2="471.5" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient59" x1="-310.5"
                                        x2="-315.7"
                                        y1="447.9" y2="457.9" gradientTransform="translate(688.2)"/>
                        <linearGradient id="linear-gradient60" x1="-384.7" x2="-384.7" y1="393.7" y2="495.3"
                                        gradientTransform="translate(688.2)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#a36203"/>
                            <stop offset="1" stop-color="#530f00"/>
                        </linearGradient>
                        <linearGradient xlink:href="#linear-gradient19" id="linear-gradient61" x1="-347.4"
                                        x2="-341.1"
                                        y1="394.3" y2="411.2"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient62" x1="-377.6"
                                        x2="-382.2"
                                        y1="409.9" y2="485.1" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient19" id="linear-gradient63" x1="-350.5" x2="-369"
                                        y1="349" y2="445.1"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient64" x1="-398.2"
                                        x2="-418.9"
                                        y1="411.5" y2="451.4" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26322" x1="-371.1" x2="-371.1"
                                        y1="368.8" y2="520.7" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient65" x1="-368.9"
                                        x2="-373.6"
                                        y1="384.3" y2="460.2" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient19" id="linear-gradient66" x1="-351.9"
                                        x2="-366.1"
                                        y1="332.5" y2="409"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient67" x1="-360.2"
                                        x2="-378.6"
                                        y1="385.7" y2="421.1" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient68" x1="-424.8"
                                        x2="-424.8"
                                        y1="436.2" y2="436.3" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient69" x1="-436" x2="-397.6"
                                        y1="341.3" y2="542.8" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_2779" x1="-564.7" x2="-503.2"
                                        y1="382" y2="492.7" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#linear-gradient23" id="linear-gradient70" x1="-568.4"
                                        x2="-468.8"
                                        y1="469.9" y2="476.4" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27710" x1="-494" x2="-539.8"
                                        y1="448.1" y2="508.6" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27711" x1="-532" x2="-527.5"
                                        y1="427.3" y2="437.9" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27712" x1="-365.1" x2="-372.3"
                                        y1="349.2" y2="448.3" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27713" x1="-512.2" x2="-536.5"
                                        y1="344.8" y2="497.7" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#linear-gradient24" id="linear-gradient71" x1="-373.2"
                                        x2="-369.4"
                                        y1="340.2" y2="376.2"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27714" x1="-358.7" x2="-361.9"
                                        y1="307.4" y2="371.3" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27715" x1="-358.7" x2="-361.9"
                                        y1="307.4" y2="371.3" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27716" x1="-524.2" x2="-449.5"
                                        y1="345.2" y2="428.4" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#linear-gradient23" id="linear-gradient72" x1="-450.6"
                                        x2="-406.7"
                                        y1="418.8" y2="515.3" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27717" x1="-451.8" x2="-422.1"
                                        y1="339.7" y2="538.4" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26420" x1="-293.6" x2="-309.9"
                                        y1="364.2" y2="470.6" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27718" x1="-316.7" x2="-316.7"
                                        y1="274.9" y2="453.2" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#linear-gradient23" id="linear-gradient73" x1="-288.2"
                                        x2="-334.7"
                                        y1="380.2" y2="498.9" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27719" x1="-266.4" x2="-271.3"
                                        y1="284.5" y2="399.3" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#linear-gradient23" id="linear-gradient74" x1="-266.4"
                                        x2="-273.5"
                                        y1="381.2" y2="401.8" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27720" x1="-242.9" x2="-153.4"
                                        y1="302.7" y2="496.2" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27721" x1="-48.9" x2="-42.3"
                                        y1="1874.1" y2="1946.7" data-name="New swatch 277"
                                        gradientTransform="rotate(-21.2 -4115.7 -232.93)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26421" x1="-214.8" x2="-198.6"
                                        y1="276.8" y2="276.8" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27722" x1="-257.3" x2="-262.1"
                                        y1="311.8" y2="391.6" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27723" x1="-312.9" x2="-326.4"
                                        y1="347.4" y2="510.9" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27724" x1="-193.2" x2="-193.5"
                                        y1="259.7" y2="263.8" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27725" x1="-465.7" x2="-458"
                                        y1="408.1" y2="416.8" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient75" x1="-373.1"
                                        x2="-373.2"
                                        y1="451.7" y2="452.7" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient76" x1="-275.2"
                                        x2="-275.2"
                                        y1="397.9" y2="398" gradientTransform="translate(688.2)"/>
                        <linearGradient id="linear-gradient77" x1="-445.5" x2="-459.9" y1="399.2" y2="523.6"
                                        gradientTransform="translate(688.2)" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#cc7a00" stop-opacity="0"/>
                            <stop offset="1" stop-color="#8f4700"/>
                        </linearGradient>
                        <linearGradient xlink:href="#linear-gradient77" id="linear-gradient78" x1="-464.7"
                                        x2="-392.2"
                                        y1="421.1" y2="559.8"/>
                        <linearGradient xlink:href="#linear-gradient77" id="linear-gradient79" x1="-540.8"
                                        x2="-515.5"
                                        y1="434.2" y2="482.7"/>
                        <linearGradient xlink:href="#linear-gradient77" id="linear-gradient80" x1="-542.9"
                                        x2="-476.2"
                                        y1="439.5" y2="559.4"/>
                        <linearGradient xlink:href="#linear-gradient77" id="linear-gradient81" x1="-301.1"
                                        x2="-363.9"
                                        y1="446.8" y2="515.4"/>
                        <linearGradient xlink:href="#linear-gradient77" id="linear-gradient82" x1="-288.4"
                                        x2="-401.4"
                                        y1="413" y2="526.1"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient83" x1="-400" x2="-400.2"
                                        y1="384.9" y2="387.6" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient84" x1="-397.7" x2="-398"
                                        y1="394" y2="399.4" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient85" x1="-387.5"
                                        x2="-387.6"
                                        y1="411.1" y2="411.6" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient24" id="linear-gradient86" x1="-290.9"
                                        x2="-275.7"
                                        y1="293.6" y2="435.1"/>
                        <linearGradient xlink:href="#linear-gradient24" id="linear-gradient87" x1="-581.9"
                                        x2="-579.2"
                                        y1="363.1" y2="385.6"/>
                        <linearGradient xlink:href="#linear-gradient24" id="linear-gradient88" x1="-534.5"
                                        x2="-526.1"
                                        y1="391.1" y2="439.7"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26323" x1="-530.2" x2="-505.8"
                                        y1="411.6" y2="454.3" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26324" x1="-516.8" x2="-501.5"
                                        y1="494.5" y2="430.9" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient89" x1="-512.6"
                                        x2="-505.8"
                                        y1="470.9" y2="451.7" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient41" id="linear-gradient90" x1="-529.2"
                                        x2="-497.5"
                                        y1="492.1" y2="467.1"/>
                        <linearGradient xlink:href="#New_swatch_269" id="New_swatch_2692" x1="-504.2" x2="-535.2"
                                        y1="480.5" y2="458.1" data-name="New swatch 269"/>
                        <linearGradient xlink:href="#New_swatch_19" id="New_swatch_192" x1="-507.1" x2="-512.2"
                                        y1="459.3" y2="439" data-name="New swatch 19"/>
                        <linearGradient xlink:href="#linear-gradient42" id="linear-gradient91" x1="-510.9"
                                        x2="-514.3"
                                        y1="449.1" y2="435.1"/>
                        <linearGradient xlink:href="#linear-gradient43" id="linear-gradient92" x1="-502.6"
                                        x2="-512.1"
                                        y1="465" y2="445"/>
                        <linearGradient xlink:href="#New_swatch_261" id="New_swatch_2612" x1="-398.9" x2="-391.8"
                                        y1="834.8" y2="860.4" data-name="New swatch 261"
                                        gradientTransform="rotate(-4.1 -5609.48 -7243)"/>
                        <linearGradient xlink:href="#linear-gradient44" id="linear-gradient93" x1="-393.3"
                                        x2="-408.9"
                                        y1="847.5" y2="830.5" gradientTransform="rotate(-4.1 -5609.48 -7243)"/>
                        <linearGradient xlink:href="#linear-gradient43" id="linear-gradient94" x1="-392.2"
                                        x2="-398.9"
                                        y1="853.4" y2="839.2" gradientTransform="rotate(-4.1 -5609.48 -7243)"/>
                        <linearGradient xlink:href="#linear-gradient46" id="linear-gradient95" x1="-397.7" x2="-396"
                                        y1="831.1" y2="848.1" gradientTransform="rotate(-4.1 -5609.48 -7243)"/>
                        <linearGradient xlink:href="#linear-gradient47" id="linear-gradient96" x1="-396.3"
                                        x2="-393.7"
                                        y1="844" y2="852.4" gradientTransform="rotate(-4.1 -5609.48 -7243)"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient97" x1="-578.6"
                                        x2="-573.9"
                                        y1="177.3" y2="207.9"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient98" x1="-570.6"
                                        x2="-568.2"
                                        y1="186.6" y2="202.5"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26422" x1="352.7" x2="371.1"
                                        y1="-420.4" y2="-420.4" data-name="New swatch 264"
                                        gradientTransform="matrix(.7888 .1334 -.0894 .999 146.3 637.5)"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient99" x1="-540.7"
                                        x2="-537.4"
                                        y1="46.3" y2="71.9"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient100" x1="-514.4"
                                        x2="-537.5"
                                        y1="5.7" y2="70.8"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient101" x1="-497.8"
                                        x2="-509.8"
                                        y1="29.3" y2="63.3"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient102" x1="-546" x2="-556"
                                        y1="48.2" y2="76.4"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient103" x1="-580.2"
                                        x2="-588.8"
                                        y1="55.2" y2="79.6"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient104" x1="-516.6"
                                        x2="-515.2"
                                        y1="42.4" y2="53.2"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient105" x1="-496" x2="-493.1"
                                        y1="32.6" y2="54.7"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient106" x1="-526.3"
                                        x2="-533.3"
                                        y1="30.7" y2="50.7"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient107" x1="-503.7"
                                        x2="-506.7"
                                        y1="43" y2="51.6"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27726" x1="-484" x2="-482"
                                        y1="530.5" y2="559" data-name="New swatch 277"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27727" x1="-483.1" x2="-484.1"
                                        y1="523.5" y2="536.6" data-name="New swatch 277"
                                        gradientTransform="matrix(1 0 0 .8 685.4 -319.8)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26325" x1="-483.5" x2="-487.5"
                                        y1="525.8" y2="613.1" data-name="New swatch 263"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient108" x1="-502.2"
                                        x2="-481.5"
                                        y1="541.5" y2="575.8"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient id="linear-gradient109" x1="-479" x2="-483.9" y1="518.6" y2="565.8"
                                        gradientTransform="matrix(1 0 0 .8 687.6 -319.9)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#b97100"/>
                            <stop offset="1" stop-color="#330a00"/>
                        </linearGradient>
                        <linearGradient id="New_swatch_265" x1="-453.8" x2="-493.8" y1="150.9" y2="542.7"
                                        data-name="New swatch 265"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#b97100"/>
                            <stop offset="1" stop-color="#551202"/>
                        </linearGradient>
                        <linearGradient xlink:href="#New_swatch_265" id="New_swatch_2651" x1="-442.2" x2="-483"
                                        y1="143"
                                        y2="542.4" data-name="New swatch 265"/>
                        <linearGradient xlink:href="#New_swatch_265" id="New_swatch_2652" x1="-430" x2="-470.8"
                                        y1="143.2" y2="542.6" data-name="New swatch 265"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient110" x1="-490.9"
                                        x2="-471.9"
                                        y1="542.1" y2="573.4"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient111" x1="-480.2"
                                        x2="-461.7"
                                        y1="542.4" y2="573"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient112" x1="-474.6"
                                        x2="-456.8"
                                        y1="542.1" y2="571.5"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient113" x1="-488.7"
                                        x2="-494.9"
                                        y1="560.2" y2="515.8"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient114" x1="-487.8"
                                        x2="-488.8"
                                        y1="548.7" y2="527.9"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient115" x1="-498.9"
                                        x2="-505.8"
                                        y1="555.1" y2="515.7"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient116" x1="-477.4"
                                        x2="-482.3"
                                        y1="563.7" y2="528.9"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient117" x1="-466.2"
                                        x2="-468.9"
                                        y1="551.1" y2="531.8"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient24" id="linear-gradient118" x1="-485.3"
                                        x2="-483.9"
                                        y1="518" y2="530"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26423" x1="-622.7" x2="-622.3"
                                        y1="320.9" y2="316.3" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26424" x1="-623.6" x2="-623.2"
                                        y1="320" y2="314.8" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26425" x1="-608.5" x2="-608.3"
                                        y1="171.2" y2="169.6" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26426" x1="-608.7" x2="-608.4"
                                        y1="175" y2="170.8" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26427" x1="-554" x2="-553.2"
                                        y1="256.9" y2="246.9" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26710" x1="-559.3" x2="-385.3"
                                        y1="241.8" y2="241.8" data-name="New swatch 267"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26711" x1="-545.8" x2="-423.3"
                                        y1="136.2" y2="136.2" data-name="New swatch 267"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26712" x1="-10419.3" x2="-10274"
                                        y1="371.8" y2="371.8" data-name="New swatch 267"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient id="New_swatch_163" x1="-10385.6" x2="-10336.5" y1="318.1" y2="318.1"
                                        data-name="New swatch 163" gradientTransform="matrix(-1 0 0 1 -10141.1 0)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#f2ecd6"/>
                            <stop offset="1" stop-color="#e1d7bc"/>
                        </linearGradient>
                        <linearGradient xlink:href="#New_swatch_163" id="New_swatch_1631" x1="-10399.7"
                                        x2="-10362.1"
                                        y1="309.6" y2="309.6" data-name="New swatch 163"/>
                        <linearGradient xlink:href="#New_swatch_163" id="New_swatch_1632" x1="-10462" x2="-10386.9"
                                        y1="301.7" y2="301.7" data-name="New swatch 163"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient119" x1="-381" x2="-468.3"
                                        y1="157.3" y2="403.8"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient120" x1="-355.3"
                                        x2="-371.9"
                                        y1="292.4" y2="339.4"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient121" x1="-441" x2="-392.7"
                                        y1="265.9" y2="351.5"/>
                        <linearGradient id="linear-gradient122" x1="-10381.4" x2="-10385.8" y1="309.9" y2="379.7"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#403f3f" stop-opacity="0"/>
                            <stop offset=".3" stop-color="#3b3a3a" stop-opacity=".2"/>
                            <stop offset=".8" stop-color="#2e2d2d" stop-opacity=".7"/>
                            <stop offset="1" stop-color="#262626"/>
                        </linearGradient>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient123" x1="-10454.4"
                                        x2="-10455"
                                        y1="337.2" y2="351.5" gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient124" x1="-414.4"
                                        x2="-470.8"
                                        y1="90.3" y2="249.6"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient125" x1="-460.9"
                                        x2="-438.8"
                                        y1="170.2" y2="222.5"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient126" x1="-474.9"
                                        x2="-469.9"
                                        y1="200.8" y2="239.7"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient127" x1="-508.6"
                                        x2="-515.4"
                                        y1="277.4" y2="246.2"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient128" x1="-461.1" x2="-476"
                                        y1="314.3" y2="360.2"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient129" x1="-468.4"
                                        x2="-397.9"
                                        y1="263.3" y2="241.6"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient130" x1="-498.2"
                                        x2="-539.8"
                                        y1="263.5" y2="244"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient131" x1="-514.8"
                                        x2="-526.9"
                                        y1="302.7" y2="351.6"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient132" x1="-516" x2="-512"
                                        y1="141.6" y2="173.1"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient133" x1="-508.9"
                                        x2="-507.3"
                                        y1="138.3" y2="150.5"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient134" x1="-448.9" x2="-463"
                                        y1="134.7" y2="156.4"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient135" x1="-421" x2="-418.8"
                                        y1="148.4" y2="165.4"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient136" x1="-419.1"
                                        x2="-416.6"
                                        y1="205.4" y2="224.9"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient137" x1="-496.6"
                                        x2="-508.1"
                                        y1="252.3" y2="284.9"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient138" x1="-516.9"
                                        x2="-530.6"
                                        y1="129.6" y2="168.3"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient139" x1="-501.3"
                                        x2="-508.2"
                                        y1="140.7" y2="160.3"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient140" x1="-495.4" x2="-533"
                                        y1="127.8" y2="234"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26428" x1="-555.5" x2="-553.3"
                                        y1="242.1" y2="242.1" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26429" x1="-554.2" x2="-551.6"
                                        y1="242.2" y2="242.2" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26430" x1="-556.4" x2="-545.4"
                                        y1="241.1" y2="241.1" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26431" x1="-535.9" x2="-535.4"
                                        y1="139.4" y2="133.2" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26432" x1="-533.9" x2="-533.4"
                                        y1="138.7" y2="133.4" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26433" x1="-428.8" x2="-428.6"
                                        y1="141.7" y2="138.5" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26434" x1="-10278.5"
                                        x2="-10278.2"
                                        y1="381.4" y2="376.9" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26435" x1="-10482" x2="-10381.7"
                                        y1="298" y2="298" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26436" x1="-315.9" x2="-206.8"
                                        y1="250.1" y2="250.1" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient141" x1="-383.3"
                                        x2="-352.2"
                                        y1="207.4" y2="197.8"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26437" x1="-10474.6"
                                        x2="-10452.4"
                                        y1="234.3" y2="332.4" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26438" x1="-489" x2="-209.8"
                                        y1="199.8" y2="199.8" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient142" x1="-409.5"
                                        x2="-409.7"
                                        y1="171" y2="171.6"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26439" x1="-494.3" x2="-416.7"
                                        y1="73.5" y2="73.5" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient143" x1="-428" x2="-428.1"
                                        y1="185.8" y2="186.2"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient144" x1="-349" x2="-385.1"
                                        y1="182.4" y2="284.5"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient145" x1="-331.7"
                                        x2="-349.7"
                                        y1="179.2" y2="230.1"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient146" x1="-338.9"
                                        x2="-343.5"
                                        y1="219.1" y2="232.1"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient147" x1="-358.4"
                                        x2="-316.4"
                                        y1="258.3" y2="245.4"/>
                        <linearGradient xlink:href="#New_swatch_196" id="New_swatch_1968" x1="-2846.7" x2="-2839.3"
                                        y1="-797" y2="-797" data-name="New swatch 196"/>
                        <linearGradient xlink:href="#New_swatch_196" id="New_swatch_1969" x1="-2829.7" x2="-2822.3"
                                        y1="-800.9" y2="-800.9" data-name="New swatch 196"/>
                        <linearGradient xlink:href="#New_swatch_196" id="New_swatch_19610" x1="-2812.7" x2="-2805.3"
                                        y1="-804.6" y2="-804.6" data-name="New swatch 196"/>
                        <linearGradient xlink:href="#New_swatch_272" id="New_swatch_2727" x1="-3010.2" x2="-3014.8"
                                        y1="-1017.3" y2="-995.6" data-name="New swatch 272"/>
                        <linearGradient xlink:href="#New_swatch_272" id="New_swatch_2728" x1="-3010.2" x2="-3014.8"
                                        y1="-1017.3" y2="-995.6" data-name="New swatch 272"/>
                        <linearGradient xlink:href="#New_swatch_128" id="New_swatch_1288" x1="-2882.9" x2="-2927.7"
                                        y1="-940.9" y2="-914.1" data-name="New swatch 128"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26713" x1="-2847.8" x2="-2839.2"
                                        y1="-804.6" y2="-804.6" data-name="New swatch 267"/>
                        <linearGradient xlink:href="#New_swatch_128" id="New_swatch_1289" x1="-2885.7" x2="-2906.7"
                                        y1="-936.4" y2="-923.9" data-name="New swatch 128"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26714" x1="-2831.8" x2="-2823.1"
                                        y1="-808.5" y2="-808.5" data-name="New swatch 267"/>
                        <linearGradient xlink:href="#New_swatch_128" id="New_swatch_12810" x1="-2881.7" x2="-2893.1"
                                        y1="-936" y2="-929.2" data-name="New swatch 128"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26440" x1="-2877" x2="-2869.2"
                                        y1="-890.8" y2="-890.8" data-name="New swatch 264"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26441" x1="-2887.3" x2="-2879.5"
                                        y1="-888.2" y2="-888.2" data-name="New swatch 264"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26442" x1="-2898.4" x2="-2890.6"
                                        y1="-885.3" y2="-885.3" data-name="New swatch 264"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26443" x1="-2911.2" x2="-2906.9"
                                        y1="-968.6" y2="-968.6" data-name="New swatch 264"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26444" x1="-2916.6" x2="-2912.3"
                                        y1="-967.2" y2="-967.2" data-name="New swatch 264"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26445" x1="-2922.3" x2="-2918"
                                        y1="-965.7" y2="-965.7" data-name="New swatch 264"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26446" x1="-2927.9" x2="-2923.6"
                                        y1="-964.2" y2="-964.2" data-name="New swatch 264"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26715" x1="-2815.2" x2="-2806.6"
                                        y1="-812.8" y2="-812.8" data-name="New swatch 267"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25931" x1="-541.5" x2="-546.2"
                                        y1="363.1" y2="378.2" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25932" x1="-596.4" x2="-587.3"
                                        y1="373.9" y2="386.5" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25933" x1="-582.7" x2="-588.4"
                                        y1="361" y2="379.2" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25934" x1="-584.6" x2="-575.5"
                                        y1="373.9" y2="386.5" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25935" x1="-571" x2="-576.6"
                                        y1="361" y2="379.2" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25936" x1="-544.3" x2="-536.8"
                                        y1="372.9" y2="383.4" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25937" x1="-532.6" x2="-537.8"
                                        y1="360.8" y2="377.3" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25938" x1="-513.9" x2="-506.3"
                                        y1="372.4" y2="382.9" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25939" x1="-502.5" x2="-507.2"
                                        y1="361.7" y2="376.8" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25940" x1="-522.6" x2="-515"
                                        y1="372.4" y2="382.9" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25941" x1="-511.2" x2="-515.9"
                                        y1="361.7" y2="376.8" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25942" x1="-506" x2="-498.5"
                                        y1="372.1" y2="382.7" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25943" x1="-494.7" x2="-499.4"
                                        y1="361.4" y2="376.5" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25944" x1="-437.9" x2="-430.3"
                                        y1="590.3" y2="600.9" data-name="New swatch 259"
                                        gradientTransform="rotate(-2.3 -5568.68 -15167.18)"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25945" x1="-426.6" x2="-431.2"
                                        y1="579.6" y2="594.7" data-name="New swatch 259"
                                        gradientTransform="rotate(-2.3 -5568.68 -15167.18)"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25946" x1="-405.8" x2="-398.2"
                                        y1="677.6" y2="688.1" data-name="New swatch 259"
                                        gradientTransform="rotate(-3.3 -5464.09 -9989.93)"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25947" x1="-394.4" x2="-399.1"
                                        y1="666.9" y2="682" data-name="New swatch 259"
                                        gradientTransform="rotate(-3.3 -5464.09 -9989.93)"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25948" x1="-386.7" x2="-379"
                                        y1="720.8" y2="731.4" data-name="New swatch 259"
                                        gradientTransform="rotate(-3.8 -5392.23 -8431)"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25949" x1="-375.3" x2="-380"
                                        y1="710.2" y2="725.2" data-name="New swatch 259"
                                        gradientTransform="rotate(-3.8 -5392.23 -8431)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26447" x1="-320.2" x2="-307.5"
                                        y1="29" y2="29" data-name="New swatch 264"
                                        gradientTransform="rotate(3.9 -4060.56 11668.01)"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25950" x1="-604.3" x2="-592.4"
                                        y1="374" y2="390.6" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25951" x1="-586.4" x2="-593.8"
                                        y1="357" y2="380.9" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25952" x1="-592.2" x2="-580.2"
                                        y1="369.2" y2="385.8" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25953" x1="-574.2" x2="-581.6"
                                        y1="352.2" y2="376.1" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26326" x1="-541.4" x2="-511.4"
                                        y1="309.1" y2="309.1" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient148" x1="-547.7"
                                        x2="-554.5"
                                        y1="123.6" y2="143"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient149" x1="-596.4"
                                        x2="-601.9"
                                        y1="136.5" y2="152"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient150" x1="-580.4"
                                        x2="-584.6"
                                        y1="140.9" y2="152.6"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient151" x1="-576.9"
                                        x2="-575.6"
                                        y1="136.7" y2="146.3"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient152" x1="-570.2"
                                        x2="-573.8"
                                        y1="124" y2="134.3"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient153" x1="-551.9"
                                        x2="-553.1"
                                        y1="131.7" y2="135"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26716" x1="-629" x2="-475.2"
                                        y1="308.4" y2="308.4" data-name="New swatch 267"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26448" x1="-10315.1"
                                        x2="-10206.9"
                                        y1="371.4" y2="371.4" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25954" x1="-578.8" x2="-566.8"
                                        y1="365.5" y2="382.1" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25955" x1="-560.8" x2="-568.2"
                                        y1="348.4" y2="372.4" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25956" x1="-564.5" x2="-552.5"
                                        y1="360.4" y2="377" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25957" x1="-546.5" x2="-553.9"
                                        y1="343.4" y2="367.3" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25958" x1="-570" x2="-573.1"
                                        y1="336.1" y2="364.3" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25959" x1="-578.8" x2="-570.4"
                                        y1="351.4" y2="385.7" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_259" id="New_swatch_25960" x1="-550.1" x2="-549"
                                        y1="345.6" y2="359.7" data-name="New swatch 259"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26717" x1="-612.4" x2="-524.6"
                                        y1="173.2" y2="173.2" data-name="New swatch 267"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient154" x1="-490.8"
                                        x2="-573.2"
                                        y1="97.3" y2="330.2"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient155" x1="-510.4"
                                        x2="-561.9"
                                        y1="75.2" y2="267.7"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient156" x1="-10276.7"
                                        x2="-10266.6" y1="258.6" y2="324.5"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26327" x1="-354.3" x2="-447.8"
                                        y1="517.6" y2="673.5" data-name="New swatch 263"
                                        gradientTransform="rotate(-2.7 -5570.58 -12511.75)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26328" x1="-557.8" x2="-592.3"
                                        y1="355.8" y2="440.5" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient157" x1="-573.7"
                                        x2="-577"
                                        y1="389.3" y2="442.7" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient158" x1="-574.2"
                                        x2="-582.2"
                                        y1="371.3" y2="408.6" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26329" x1="-418.3" x2="-495.9"
                                        y1="342.7" y2="420.3" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient159" x1="-485.1"
                                        x2="-481.7"
                                        y1="395.1" y2="430.2" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26330" x1="-534.4" x2="-477.7"
                                        y1="60.2" y2="60.2" data-name="New swatch 263"
                                        gradientTransform="rotate(1.9 -5270.86 21906.02)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26331" x1="-535.8" x2="-565.3"
                                        y1="374.5" y2="467.9" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient160" x1="-549.6"
                                        x2="-552.7"
                                        y1="413.8" y2="464.3" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26332" x1="-554.4" x2="-561.4"
                                        y1="372.5" y2="468.7" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient161" x1="-555.5"
                                        x2="-557.5"
                                        y1="411.2" y2="443" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient162" x1="-559.6"
                                        x2="-558.9"
                                        y1="409.2" y2="427.9" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient163" x1="-561.5"
                                        x2="-561.5"
                                        y1="392.5" y2="419" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27728" x1="-553.8" x2="-623"
                                        y1="348.9" y2="440.9" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27729" x1="-10275.3"
                                        x2="-10276.4"
                                        y1="365.5" y2="397.8" data-name="New swatch 277"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27730" x1="-548.5" x2="-573.8"
                                        y1="360" y2="433.2" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27731" x1="-557.2" x2="-553.4"
                                        y1="386.4" y2="395.3" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27732" x1="-550.5" x2="-575.5"
                                        y1="347.6" y2="483.6" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27733" x1="-497.9" x2="-535.2"
                                        y1="368.4" y2="461.4" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_196" id="New_swatch_19611" x1="-11744.1"
                                        x2="-11741.2"
                                        y1="2311.8" y2="2311.8" data-name="New swatch 196"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_196" id="New_swatch_19612" x1="-11737.5"
                                        x2="-11734.7"
                                        y1="2310.6" y2="2310.6" data-name="New swatch 196"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_196" id="New_swatch_19613" x1="-11730.7"
                                        x2="-11727.9"
                                        y1="2309.5" y2="2309.5" data-name="New swatch 196"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_196" id="New_swatch_19614" x1="-11723.9"
                                        x2="-11721.2"
                                        y1="2308.4" y2="2308.4" data-name="New swatch 196"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_272" id="New_swatch_2729" x1="-11748" x2="-11748"
                                        y1="2437.7" y2="2452.7" data-name="New swatch 272"
                                        gradientTransform="rotate(156.9 -6094 203.4)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_272" id="New_swatch_27210" x1="-11762" x2="-11764.3"
                                        y1="2430.6" y2="2441.6" data-name="New swatch 272"
                                        gradientTransform="rotate(156.9 -6094 203.4)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_272" id="New_swatch_27211" x1="-11762" x2="-11764.3"
                                        y1="2430.6" y2="2441.6" data-name="New swatch 272"
                                        gradientTransform="rotate(156.9 -6094 203.4)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_272" id="New_swatch_27212" x1="-11751.3"
                                        x2="-11748.8"
                                        y1="2418.6" y2="2453.6" data-name="New swatch 272"
                                        gradientTransform="rotate(156.9 -6094 203.4)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_128" id="New_swatch_12811" x1="-11814.6"
                                        x2="-11818.9"
                                        y1="2179.9" y2="2182.4" data-name="New swatch 128"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_128" id="New_swatch_12812" x1="-11809.7"
                                        x2="-11817.3"
                                        y1="2178.4" y2="2182.9" data-name="New swatch 128"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26718" x1="-11746.3"
                                        x2="-11741.4"
                                        y1="2303.6" y2="2303.6" data-name="New swatch 267"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26719" x1="-11739.9"
                                        x2="-11734.8"
                                        y1="2302.5" y2="2302.5" data-name="New swatch 267"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_128" id="New_swatch_12813" x1="-11802.4"
                                        x2="-11819.1"
                                        y1="2175.3" y2="2185.3" data-name="New swatch 128"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26720" x1="-11733.6"
                                        x2="-11728.5"
                                        y1="2301.3" y2="2301.3" data-name="New swatch 267"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_128" id="New_swatch_12814" x1="-11794.7"
                                        x2="-11821.4"
                                        y1="2171.9" y2="2187.9" data-name="New swatch 128"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26449" x1="-11402.9"
                                        x2="-11399.8"
                                        y1="1463.5" y2="1463.5" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -11056 -1160.6)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26450" x1="-11407.1" x2="-11404"
                                        y1="1464.6" y2="1464.6" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -11055.9 -1161.6)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26451" x1="-11411.2" x2="-11408"
                                        y1="1465.6" y2="1465.6" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -11055.8 -1162.5)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26452" x1="-11415.6"
                                        x2="-11412.4"
                                        y1="1466.6" y2="1466.6" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -11055.7 -1163.6)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26453" x1="-10735.7"
                                        x2="-10734.2"
                                        y1="587.3" y2="587.3" data-name="New swatch 264"
                                        gradientTransform="rotate(176 -5292.53 6.76)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26454" x1="-10737.8"
                                        x2="-10736.3"
                                        y1="587.9" y2="587.9" data-name="New swatch 264"
                                        gradientTransform="rotate(176 -5292.53 6.76)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26455" x1="-10739.8"
                                        x2="-10738.3"
                                        y1="588.4" y2="588.4" data-name="New swatch 264"
                                        gradientTransform="rotate(176 -5292.53 6.76)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26456" x1="-10741.9"
                                        x2="-10740.3"
                                        y1="588.9" y2="588.9" data-name="New swatch 264"
                                        gradientTransform="rotate(176 -5292.53 6.76)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26721" x1="-11727.2" x2="-11722"
                                        y1="2299.7" y2="2299.7" data-name="New swatch 267"
                                        gradientTransform="rotate(159.1 -6045.76 150.06)scale(1 -1)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27734" x1="-486.3" x2="-507.3"
                                        y1="374" y2="418" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#linear-gradient23" id="linear-gradient164" x1="-497.1"
                                        x2="-516.3"
                                        y1="386.6" y2="462" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27735" x1="-511.6" x2="-500.8"
                                        y1="402.4" y2="427.4" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26333" x1="-584.6" x2="-537.7"
                                        y1="483.8" y2="505.4" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26457" x1="-585.6" x2="-517.9"
                                        y1="487.2" y2="487.2" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26334" x1="-601.6" x2="-510.2"
                                        y1="440" y2="514.8" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient165" x1="-538.8"
                                        x2="-541.6"
                                        y1="486" y2="531.8" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26458" x1="-590.2" x2="-494.4"
                                        y1="471.6" y2="471.6" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26335" x1="-381.2" x2="-285.8"
                                        y1="345.6" y2="478.3" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26336" x1="-420.4" x2="-449.5"
                                        y1="310" y2="571.9" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient166" x1="-439"
                                        x2="-444.2"
                                        y1="475.3" y2="558.6" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient19" id="linear-gradient167" x1="-443.1"
                                        x2="-437.5"
                                        y1="460.6" y2="509.4"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26337" x1="-428.6" x2="-437.7"
                                        y1="320.5" y2="556.7" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient168" x1="-431.5"
                                        x2="-437.1"
                                        y1="453.2" y2="544.3" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient169" x1="-340" x2="-350"
                                        y1="470.7" y2="490" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient170" x1="-473.3"
                                        x2="-490.2"
                                        y1="464.1" y2="496.8" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient19" id="linear-gradient171" x1="-423.4"
                                        x2="-420"
                                        y1="446.7" y2="476.3"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26338" x1="-312.8" x2="-288.9"
                                        y1="445.4" y2="476.4" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient172" x1="-298.7"
                                        x2="-300"
                                        y1="472.9" y2="475.3" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26339" x1="-299.8" x2="-275.4"
                                        y1="419.1" y2="455.9" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient173" x1="-285.6"
                                        x2="-286.8"
                                        y1="450.3" y2="452.6" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26340" x1="-292.5" x2="-267.7"
                                        y1="391.6" y2="431.8" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient174" x1="-276"
                                        x2="-276.7"
                                        y1="425.4" y2="426.9" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26341" x1="-288.6" x2="-258.4"
                                        y1="386.8" y2="386.8" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient175" x1="-268.7"
                                        x2="-269.7"
                                        y1="397.4" y2="399.2" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26342" x1="-433.9" x2="-433.9"
                                        y1="327.4" y2="617.1" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient19" id="linear-gradient176" x1="-345.5"
                                        x2="-381.6"
                                        y1="366" y2="499.3"/>
                        <linearGradient xlink:href="#linear-gradient19" id="linear-gradient177" x1="-368.5"
                                        x2="-366"
                                        y1="421.4" y2="443.2"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient178" x1="-436.7"
                                        x2="-441.9"
                                        y1="433.6" y2="516.8" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26343" x1="-489.5" x2="-459.6"
                                        y1="401.5" y2="453.7" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26344" x1="-471" x2="-451.6"
                                        y1="490.1" y2="425.1" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient179" x1="-467"
                                        x2="-458.9"
                                        y1="472.3" y2="449.4" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient43" id="linear-gradient180" x1="-385.1"
                                        x2="-392.5"
                                        y1="708.9" y2="693.3" gradientTransform="rotate(-2.7 -5373.2 -12239.62)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient181" x1="-513.8"
                                        x2="-533.8"
                                        y1="419.9" y2="570.2" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient182" x1="-513.7"
                                        x2="-524.6"
                                        y1="452.7" y2="473.7" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26345" x1="-560.8" x2="-539.8"
                                        y1="417.1" y2="453.7" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26346" x1="-544.1" x2="-538.6"
                                        y1="494.3" y2="441" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient183" x1="-543"
                                        x2="-537.1"
                                        y1="468.4" y2="451.5" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient41" id="linear-gradient184" x1="-561.1"
                                        x2="-530.3"
                                        y1="489.3" y2="465"/>
                        <linearGradient xlink:href="#New_swatch_269" id="New_swatch_2693" x1="-535.7" x2="-563"
                                        y1="476.8" y2="457.1" data-name="New swatch 269"/>
                        <linearGradient xlink:href="#New_swatch_19" id="New_swatch_193" x1="-541.4" x2="-545.9"
                                        y1="458.2" y2="440.4" data-name="New swatch 19"/>
                        <linearGradient xlink:href="#linear-gradient42" id="linear-gradient185" x1="-544.7"
                                        x2="-547.8"
                                        y1="449.2" y2="436.9"/>
                        <linearGradient xlink:href="#linear-gradient43" id="linear-gradient186" x1="-537.5"
                                        x2="-545.9"
                                        y1="463.2" y2="445.6"/>
                        <linearGradient xlink:href="#New_swatch_261" id="New_swatch_2613" x1="-163" x2="-156.8"
                                        y1="833.6" y2="856.1" data-name="New swatch 261"
                                        gradientTransform="rotate(-4.1 -5474.3 -3400.26)"/>
                        <linearGradient xlink:href="#linear-gradient44" id="linear-gradient187" x1="-158.1"
                                        x2="-171.8"
                                        y1="844.7" y2="829.8" gradientTransform="rotate(-4.1 -5474.3 -3400.26)"/>
                        <linearGradient xlink:href="#linear-gradient43" id="linear-gradient188" x1="-157.1"
                                        x2="-163"
                                        y1="849.9" y2="837.4" gradientTransform="rotate(-4.1 -5474.3 -3400.26)"/>
                        <linearGradient xlink:href="#linear-gradient46" id="linear-gradient189" x1="-162"
                                        x2="-160.5"
                                        y1="830.3" y2="845.3" gradientTransform="rotate(-4.1 -5474.3 -3400.26)"/>
                        <linearGradient xlink:href="#linear-gradient47" id="linear-gradient190" x1="-429"
                                        x2="-426.7"
                                        y1="841.6" y2="849" gradientTransform="rotate(-4.1 -5609.48 -7243)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient191" x1="-391.4"
                                        x2="-398.9"
                                        y1="457.2" y2="471.5" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient192" x1="-310.5"
                                        x2="-315.7"
                                        y1="447.9" y2="457.9" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient19" id="linear-gradient193" x1="-347.4"
                                        x2="-341.1"
                                        y1="394.3" y2="411.2"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient194" x1="-377.6"
                                        x2="-382.2"
                                        y1="409.9" y2="485.1" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient19" id="linear-gradient195" x1="-350.5"
                                        x2="-369"
                                        y1="349" y2="445.1"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient196" x1="-398.2"
                                        x2="-418.9"
                                        y1="411.5" y2="451.4" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26347" x1="-371.1" x2="-371.1"
                                        y1="368.8" y2="520.7" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient197" x1="-368.9"
                                        x2="-373.6"
                                        y1="384.3" y2="460.2" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient19" id="linear-gradient198" x1="-351.9"
                                        x2="-366.1"
                                        y1="332.5" y2="409"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient199" x1="-360.2"
                                        x2="-378.6"
                                        y1="385.7" y2="421.1" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient200" x1="-424.8"
                                        x2="-424.8"
                                        y1="436.2" y2="436.3" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient201" x1="-436"
                                        x2="-397.6"
                                        y1="341.3" y2="542.8" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27736" x1="-564.7" x2="-503.2"
                                        y1="382" y2="492.7" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#linear-gradient23" id="linear-gradient202" x1="-568.4"
                                        x2="-468.8"
                                        y1="469.9" y2="476.4" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27737" x1="-494" x2="-539.8"
                                        y1="448.1" y2="508.6" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27738" x1="-532" x2="-527.5"
                                        y1="427.3" y2="437.9" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27739" x1="-365.1" x2="-372.3"
                                        y1="349.2" y2="448.3" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27740" x1="-512.2" x2="-536.5"
                                        y1="344.8" y2="497.7" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#linear-gradient24" id="linear-gradient203" x1="-373.2"
                                        x2="-369.4"
                                        y1="340.2" y2="376.2"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27741" x1="-358.7" x2="-361.9"
                                        y1="307.4" y2="371.3" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27742" x1="-358.7" x2="-361.9"
                                        y1="307.4" y2="371.3" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27743" x1="-524.2" x2="-449.5"
                                        y1="345.2" y2="428.4" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#linear-gradient23" id="linear-gradient204" x1="-450.6"
                                        x2="-406.7"
                                        y1="418.8" y2="515.3" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27744" x1="-451.8" x2="-422.1"
                                        y1="339.7" y2="538.4" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26459" x1="-293.6" x2="-309.9"
                                        y1="364.2" y2="470.6" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27745" x1="-316.7" x2="-316.7"
                                        y1="274.9" y2="453.2" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#linear-gradient23" id="linear-gradient205" x1="-288.2"
                                        x2="-334.7"
                                        y1="380.2" y2="498.9" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27746" x1="-266.4" x2="-271.3"
                                        y1="284.5" y2="399.3" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#linear-gradient23" id="linear-gradient206" x1="-266.4"
                                        x2="-273.5"
                                        y1="381.2" y2="401.8" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27747" x1="-242.9" x2="-153.4"
                                        y1="302.7" y2="496.2" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27748" x1="-48.9" x2="-42.3"
                                        y1="1874.1" y2="1946.7" data-name="New swatch 277"
                                        gradientTransform="rotate(-21.2 -4115.7 -232.93)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26460" x1="-214.8" x2="-198.6"
                                        y1="276.8" y2="276.8" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27749" x1="-257.3" x2="-262.1"
                                        y1="311.8" y2="391.6" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27750" x1="-312.9" x2="-326.4"
                                        y1="347.4" y2="510.9" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27751" x1="-193.2" x2="-193.5"
                                        y1="259.7" y2="263.8" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27752" x1="-465.7" x2="-458"
                                        y1="408.1" y2="416.8" data-name="New swatch 277"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient207" x1="-373.1"
                                        x2="-373.2"
                                        y1="451.7" y2="452.7" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient208" x1="-275.2"
                                        x2="-275.2"
                                        y1="397.9" y2="398" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient77" id="linear-gradient209" x1="-464.7"
                                        x2="-392.2"
                                        y1="421.1" y2="559.8"/>
                        <linearGradient xlink:href="#linear-gradient77" id="linear-gradient210" x1="-540.8"
                                        x2="-515.5"
                                        y1="434.2" y2="482.7"/>
                        <linearGradient xlink:href="#linear-gradient77" id="linear-gradient211" x1="-542.9"
                                        x2="-476.2"
                                        y1="439.5" y2="559.4"/>
                        <linearGradient xlink:href="#linear-gradient77" id="linear-gradient212" x1="-301.1"
                                        x2="-363.9"
                                        y1="446.8" y2="515.4"/>
                        <linearGradient xlink:href="#linear-gradient77" id="linear-gradient213" x1="-288.4"
                                        x2="-401.4"
                                        y1="413" y2="526.1"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient214" x1="-400"
                                        x2="-400.2"
                                        y1="384.9" y2="387.6" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient215" x1="-397.7"
                                        x2="-398"
                                        y1="394" y2="399.4" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient216" x1="-387.5"
                                        x2="-387.6"
                                        y1="411.1" y2="411.6" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient24" id="linear-gradient217" x1="-290.9"
                                        x2="-275.7"
                                        y1="293.6" y2="435.1"/>
                        <linearGradient xlink:href="#linear-gradient24" id="linear-gradient218" x1="-581.9"
                                        x2="-579.2"
                                        y1="363.1" y2="385.6"/>
                        <linearGradient xlink:href="#linear-gradient24" id="linear-gradient219" x1="-534.5"
                                        x2="-526.1"
                                        y1="391.1" y2="439.7"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26348" x1="-530.2" x2="-505.8"
                                        y1="411.6" y2="454.3" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26349" x1="-516.8" x2="-501.5"
                                        y1="494.5" y2="430.9" data-name="New swatch 263"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient220" x1="-512.6"
                                        x2="-505.8"
                                        y1="470.9" y2="451.7" gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient41" id="linear-gradient221" x1="-529.2"
                                        x2="-497.5"
                                        y1="492.1" y2="467.1"/>
                        <linearGradient xlink:href="#New_swatch_269" id="New_swatch_2694" x1="-504.2" x2="-535.2"
                                        y1="480.5" y2="458.1" data-name="New swatch 269"/>
                        <linearGradient xlink:href="#New_swatch_19" id="New_swatch_194" x1="-507.1" x2="-512.2"
                                        y1="459.3" y2="439" data-name="New swatch 19"/>
                        <linearGradient xlink:href="#linear-gradient42" id="linear-gradient222" x1="-510.9"
                                        x2="-514.3"
                                        y1="449.1" y2="435.1"/>
                        <linearGradient xlink:href="#linear-gradient43" id="linear-gradient223" x1="-502.6"
                                        x2="-512.1"
                                        y1="465" y2="445"/>
                        <linearGradient xlink:href="#New_swatch_261" id="New_swatch_2614" x1="-398.9" x2="-391.8"
                                        y1="834.8" y2="860.4" data-name="New swatch 261"
                                        gradientTransform="rotate(-4.1 -5609.48 -7243)"/>
                        <linearGradient xlink:href="#linear-gradient44" id="linear-gradient224" x1="-393.3"
                                        x2="-408.9"
                                        y1="847.5" y2="830.5" gradientTransform="rotate(-4.1 -5609.48 -7243)"/>
                        <linearGradient xlink:href="#linear-gradient43" id="linear-gradient225" x1="-392.2"
                                        x2="-398.9"
                                        y1="853.4" y2="839.2" gradientTransform="rotate(-4.1 -5609.48 -7243)"/>
                        <linearGradient xlink:href="#linear-gradient46" id="linear-gradient226" x1="-397.7"
                                        x2="-396"
                                        y1="831.1" y2="848.1" gradientTransform="rotate(-4.1 -5609.48 -7243)"/>
                        <linearGradient xlink:href="#linear-gradient47" id="linear-gradient227" x1="-396.3"
                                        x2="-393.7"
                                        y1="844" y2="852.4" gradientTransform="rotate(-4.1 -5609.48 -7243)"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient228" x1="-578.6"
                                        x2="-573.9"
                                        y1="177.3" y2="207.9"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient229" x1="-570.6"
                                        x2="-568.2"
                                        y1="186.6" y2="202.5"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26461" x1="352.7" x2="371.1"
                                        y1="-420.4" y2="-420.4" data-name="New swatch 264"
                                        gradientTransform="matrix(.7888 .1334 -.0894 .999 146.3 637.5)"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient230" x1="-540.7"
                                        x2="-537.4"
                                        y1="46.3" y2="71.9"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient231" x1="-514.4"
                                        x2="-537.5"
                                        y1="5.7" y2="70.8"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient232" x1="-497.8"
                                        x2="-509.8"
                                        y1="29.3" y2="63.3"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient233" x1="-546" x2="-556"
                                        y1="48.2" y2="76.4"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient234" x1="-580.2"
                                        x2="-588.8"
                                        y1="55.2" y2="79.6"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient235" x1="-516.6"
                                        x2="-515.2"
                                        y1="42.4" y2="53.2"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient236" x1="-496" x2="-493.1"
                                        y1="32.6" y2="54.7"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient237" x1="-526.3"
                                        x2="-533.3"
                                        y1="30.7" y2="50.7"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient238" x1="-503.7"
                                        x2="-506.7"
                                        y1="43" y2="51.6"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27753" x1="-484" x2="-482"
                                        y1="530.5" y2="559" data-name="New swatch 277"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#New_swatch_277" id="New_swatch_27754" x1="-483.1" x2="-484.1"
                                        y1="523.5" y2="536.6" data-name="New swatch 277"
                                        gradientTransform="matrix(1 0 0 .8 685.4 -319.8)"/>
                        <linearGradient xlink:href="#New_swatch_263" id="New_swatch_26350" x1="-483.5" x2="-487.5"
                                        y1="525.8" y2="613.1" data-name="New swatch 263"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient239" x1="-502.2"
                                        x2="-481.5"
                                        y1="541.5" y2="575.8"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#New_swatch_265" id="New_swatch_2653" x1="-442.2" x2="-483"
                                        y1="143"
                                        y2="542.4" data-name="New swatch 265"/>
                        <linearGradient xlink:href="#New_swatch_265" id="New_swatch_2654" x1="-430" x2="-470.8"
                                        y1="143.2" y2="542.6" data-name="New swatch 265"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient240" x1="-490.9"
                                        x2="-471.9"
                                        y1="542.1" y2="573.4"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient241" x1="-480.2"
                                        x2="-461.7"
                                        y1="542.4" y2="573"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient242" x1="-474.6"
                                        x2="-456.8"
                                        y1="542.1" y2="571.5"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient243" x1="-488.7"
                                        x2="-494.9"
                                        y1="560.2" y2="515.8"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient244" x1="-487.8"
                                        x2="-488.8"
                                        y1="548.7" y2="527.9"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient245" x1="-498.9"
                                        x2="-505.8"
                                        y1="555.1" y2="515.7"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient246" x1="-477.4"
                                        x2="-482.3"
                                        y1="563.7" y2="528.9"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient13" id="linear-gradient247" x1="-466.2"
                                        x2="-468.9"
                                        y1="551.1" y2="531.8"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#linear-gradient24" id="linear-gradient248" x1="-485.3"
                                        x2="-483.9"
                                        y1="518" y2="530"
                                        gradientTransform="rotate(-5.1 -3729.51 -7443.28)scale(1 .8)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26462" x1="-622.7" x2="-622.3"
                                        y1="320.9" y2="316.3" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26463" x1="-623.6" x2="-623.2"
                                        y1="320" y2="314.8" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26464" x1="-608.5" x2="-608.3"
                                        y1="171.2" y2="169.6" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26465" x1="-608.7" x2="-608.4"
                                        y1="175" y2="170.8" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26466" x1="-554" x2="-553.2"
                                        y1="256.9" y2="246.9" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26722" x1="-559.3" x2="-385.3"
                                        y1="241.8" y2="241.8" data-name="New swatch 267"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26723" x1="-545.8" x2="-423.3"
                                        y1="136.2" y2="136.2" data-name="New swatch 267"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_267" id="New_swatch_26724" x1="-10419.3" x2="-10274"
                                        y1="371.8" y2="371.8" data-name="New swatch 267"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient xlink:href="#New_swatch_163" id="New_swatch_1633" x1="-10399.7"
                                        x2="-10362.1"
                                        y1="309.6" y2="309.6" data-name="New swatch 163"/>
                        <linearGradient xlink:href="#New_swatch_163" id="New_swatch_1634" x1="-10462" x2="-10386.9"
                                        y1="301.7" y2="301.7" data-name="New swatch 163"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient249" x1="-381" x2="-468.3"
                                        y1="157.3" y2="403.8"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient250" x1="-355.3"
                                        x2="-371.9"
                                        y1="292.4" y2="339.4"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient251" x1="-441" x2="-392.7"
                                        y1="265.9" y2="351.5"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient252" x1="-10454.4"
                                        x2="-10455"
                                        y1="337.2" y2="351.5" gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient253" x1="-414.4"
                                        x2="-470.8"
                                        y1="90.3" y2="249.6"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient254" x1="-460.9"
                                        x2="-438.8"
                                        y1="170.2" y2="222.5"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient255" x1="-474.9"
                                        x2="-469.9"
                                        y1="200.8" y2="239.7"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient256" x1="-508.6"
                                        x2="-515.4"
                                        y1="277.4" y2="246.2"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient257" x1="-461.1" x2="-476"
                                        y1="314.3" y2="360.2"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient258" x1="-468.4"
                                        x2="-397.9"
                                        y1="263.3" y2="241.6"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient259" x1="-498.2"
                                        x2="-539.8"
                                        y1="263.5" y2="244"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient260" x1="-514.8"
                                        x2="-526.9"
                                        y1="302.7" y2="351.6"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient261" x1="-516" x2="-512"
                                        y1="141.6" y2="173.1"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient262" x1="-508.9"
                                        x2="-507.3"
                                        y1="138.3" y2="150.5"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient263" x1="-448.9" x2="-463"
                                        y1="134.7" y2="156.4"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient264" x1="-421" x2="-418.8"
                                        y1="148.4" y2="165.4"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient265" x1="-419.1"
                                        x2="-416.6"
                                        y1="205.4" y2="224.9"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient266" x1="-496.6"
                                        x2="-508.1"
                                        y1="252.3" y2="284.9"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient267" x1="-516.9"
                                        x2="-530.6"
                                        y1="129.6" y2="168.3"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient268" x1="-501.3"
                                        x2="-508.2"
                                        y1="140.7" y2="160.3"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient269" x1="-495.4" x2="-533"
                                        y1="127.8" y2="234"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26467" x1="-555.5" x2="-553.3"
                                        y1="242.1" y2="242.1" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26468" x1="-554.2" x2="-551.6"
                                        y1="242.2" y2="242.2" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26469" x1="-556.4" x2="-545.4"
                                        y1="241.1" y2="241.1" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26470" x1="-535.9" x2="-535.4"
                                        y1="139.4" y2="133.2" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26471" x1="-533.9" x2="-533.4"
                                        y1="138.7" y2="133.4" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26472" x1="-428.8" x2="-428.6"
                                        y1="141.7" y2="138.5" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26473" x1="-10278.5"
                                        x2="-10278.2"
                                        y1="381.4" y2="376.9" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26474" x1="-10482" x2="-10381.7"
                                        y1="298" y2="298" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26475" x1="-315.9" x2="-206.8"
                                        y1="250.1" y2="250.1" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient270" x1="-383.3"
                                        x2="-352.2"
                                        y1="207.4" y2="197.8"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26476" x1="-10474.6"
                                        x2="-10452.4"
                                        y1="234.3" y2="332.4" data-name="New swatch 264"
                                        gradientTransform="matrix(-1 0 0 1 -10141.1 0)"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26477" x1="-489" x2="-209.8"
                                        y1="199.8" y2="199.8" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient271" x1="-409.5"
                                        x2="-409.7"
                                        y1="171" y2="171.6"/>
                        <linearGradient xlink:href="#New_swatch_264" id="New_swatch_26478" x1="-494.3" x2="-416.7"
                                        y1="73.5" y2="73.5" data-name="New swatch 264"
                                        gradientTransform="translate(688.2)"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient272" x1="-428" x2="-428.1"
                                        y1="185.8" y2="186.2"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient273" x1="-349" x2="-385.1"
                                        y1="182.4" y2="284.5"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient274" x1="-331.7"
                                        x2="-349.7"
                                        y1="179.2" y2="230.1"/>
                        <linearGradient xlink:href="#linear-gradient2" id="linear-gradient275" x1="-338.9"
                                        x2="-343.5"
                                        y1="219.1" y2="232.1"/>
                        <linearGradient xlink:href="#linear-gradient6" id="linear-gradient276" x1="-358.4"
                                        x2="-316.4"
                                        y1="258.3" y2="245.4"/>
                        <clipPath id="clippath">
                            <path d="M81.2 455 0 348.8 19.8 74.7 126.4 0l212.2 47.5 210.3 164.7-59.4 251.1-70-14.8-22.1 3.2-32.1 4-16.7 7-19.6 2.8-18.7 2.9-17.4-.2-15.1 2.4-13.8 1.9-15.5 1.6-25-.8-26.5-.2-9.5 3.8-37.9-6.3-28.8 2-22.9-1z"
                                  class="st395"/>
                        </clipPath>
                        <clipPath id="clippath-1">
                            <path d="m489.5 463.3-70.1-14.8-22.1 3.2-32.1 4.1-16.7 7-19.5 2.8-18.7 3-17.4-.2-15.1 2.4-13.8 1.9-15.5 1.6-25-.8-26.5-.2-9.5 3.8-37.8-6.3-28.8 2-22.8-1-16.7-16.5-22.1 85.9s257.4 18.2 265 20.3 165.4-98 165.4-98Z"
                                  class="st395"/>
                        </clipPath>
                        <style>.st13, .st45, .st50, .st68, .st97 {
                                mix-blend-mode: screen
                            }

                            .st115, .st116, .st135, .st156, .st176, .st179, .st269 {
                                mix-blend-mode: multiply
                            }

                            .st271 {
                                opacity: .9
                            }

                            .st273 {
                                fill: url(#New_swatch_128)
                            }

                            .st115 {
                                fill: url(#linear-gradient77);
                                opacity: .5
                            }

                            .st116 {
                                fill: url(#linear-gradient6)
                            }

                            .st13 {
                                fill: url(#linear-gradient42)
                            }

                            .st297 {
                                fill: url(#New_swatch_163)
                            }

                            .st322 {
                                fill: url(#New_swatch_259)
                            }

                            .st324 {
                                fill: url(#New_swatch_267)
                            }

                            .st135 {
                                fill: url(#linear-gradient13)
                            }

                            .st336 {
                                fill: url(#New_swatch_263)
                            }

                            .st352 {
                                fill: url(#New_swatch_277)
                            }

                            .st361 {
                                fill: url(#linear-gradient1)
                            }

                            .st364 {
                                fill: url(#linear-gradient109)
                            }

                            .st156 {
                                fill: url(#linear-gradient43)
                            }

                            .st383 {
                                fill: url(#New_swatch_265)
                            }

                            .st395 {
                                fill: none
                            }

                            .st408 {
                                fill: url(#linear-gradient16)
                            }

                            .st412 {
                                fill: url(#New_swatch_269)
                            }

                            .st45 {
                                fill: url(#linear-gradient24)
                            }

                            .st176 {
                                fill: url(#linear-gradient122)
                            }

                            .st179 {
                                fill: url(#linear-gradient47)
                            }

                            .st50 {
                                fill: url(#linear-gradient2)
                            }

                            .st476 {
                                fill: #2e3747
                            }

                            .st494 {
                                fill: url(#New_swatch_264)
                            }

                            .st68 {
                                fill: url(#linear-gradient46)
                            }

                            .st521 {
                                fill: url(#New_swatch_272)
                            }

                            .st544 {
                                fill: #f3f7ff
                            }

                            .st589 {
                                fill: url(#linear-gradient60)
                            }

                            .st593 {
                                fill: url(#New_swatch_19)
                            }

                            .st594 {
                                fill: url(#linear-gradient)
                            }

                            .st596 {
                                fill: url(#linear-gradient44)
                            }

                            .st608 {
                                fill: url(#linear-gradient41)
                            }

                            .st97 {
                                fill: url(#linear-gradient19)
                            }

                            .st610 {
                                fill: url(#New_swatch_196)
                            }

                            .st618 {
                                fill: url(#New_swatch_261)
                            }

                            .st269 {
                                fill: url(#linear-gradient23)
                            }</style>
                    </defs>
                    <g style="isolation:isolate">
                        <g id="Calque_1">
                            <g style="clip-path:url(#clippath)">
                                <path d="M242.9 383.7v5.6c0 .6.3 1.1.9 1.2.5 0 .9-.2.9-.7.1-1.3.4-3.7.6-5.6-.6-.3-1.3-.5-2.4-.5"
                                      class="st610"/>
                                <path d="M248.5 384.4v5.6c0 .6.3 1.1.9 1.2.5 0 .9-.2.9-.7.1-1.3.4-3.7.6-5.6-.6-.3-1.3-.5-2.4-.5"
                                      style="fill:url(#New_swatch_1961)"/>
                                <path d="M254.3 384.9v5.6c0 .6.3 1.1.9 1.2.5 0 .9-.2.9-.7.1-1.3.4-3.7.6-5.6-.6-.3-1.3-.5-2.4-.5"
                                      style="fill:url(#New_swatch_1962)"/>
                                <path d="M260 385.5v5.6c0 .6.3 1.1.9 1.2.5 0 .9-.2.9-.7.1-1.3.4-3.7.6-5.6-.6-.3-1.3-.5-2.4-.5"
                                      style="fill:url(#New_swatch_1963)"/>
                                <path d="m242.4 384.9 21.7-4.5.7 2.4-22.7 6.6z" class="st521"/>
                                <path d="m237.9 380.5 3.2 1.9-.3 2.7-3.2-1.8z" style="fill:url(#New_swatch_2721)"/>
                                <path d="m237.9 380.5 3.2 1.9-.3 2.7-3.2-1.8z"
                                      style="mix-blend-mode:multiply;fill:url(#New_swatch_2722)"/>
                                <path d="m205.3 111.9 38 269.6.9.4L205.5 109z" class="st273"/>
                                <path d="m205.3 111.9 43.6 270 1 .4L205.5 109z" style="fill:url(#New_swatch_1281)"/>
                                <path d="m242.8 382-.5-4.2h1.7l1.3 4.5c-.8 0-1.5 0-2.4-.3Z" class="st324"/>
                                <path d="m248.5 382.3-.5-4.2h1.7l1.3 4.5c-.8 0-1.5 0-2.4-.3Z"
                                      style="fill:url(#New_swatch_2671)"/>
                                <path d="m205.3 111.9 49.1 270.3.9.3L205.5 109z"
                                      style="fill:url(#New_swatch_1282)"/>
                                <path d="m253.9 382.5-.5-4.2h1.7l1.3 4.5c-.8 0-1.5 0-2.4-.3Z"
                                      style="fill:url(#New_swatch_2672)"/>
                                <path d="m205.2 112 54.7 270 1 .4-55.4-273.3z" style="fill:url(#New_swatch_1283)"/>
                                <path d="M240.4 289.6c0-.8.7-1.3 1.4-1.1s1.3 1 1.2 1.8-.7 1.3-1.4 1.1-1.3-1-1.2-1.8"
                                      class="st494"/>
                                <path d="M236.8 289.7c0-.8.7-1.3 1.4-1.1s1.3 1 1.2 1.8c0 .8-.7 1.3-1.4 1.1s-1.3-1-1.2-1.8"
                                      style="fill:url(#New_swatch_2641)"/>
                                <path d="M233.3 289.8c0-.8.7-1.3 1.4-1.1s1.3 1 1.2 1.8-.7 1.3-1.4 1.1-1.3-1-1.2-1.8"
                                      style="fill:url(#New_swatch_2642)"/>
                                <path d="M229.6 289.8c0-.8.7-1.3 1.4-1.1s1.3 1 1.2 1.8-.7 1.3-1.4 1.1-1.3-1-1.2-1.8"
                                      style="fill:url(#New_swatch_2643)"/>
                                <path d="M224 206c0-.4.4-.7.8-.6s.7.5.7 1-.4.7-.8.6-.7-.5-.7-1"
                                      style="fill:url(#New_swatch_2644)"/>
                                <path d="M222.2 206.1c0-.4.4-.7.8-.6s.7.5.7 1-.4.7-.8.6-.7-.5-.7-1"
                                      style="fill:url(#New_swatch_2645)"/>
                                <path d="M220.3 206.1c0-.4.4-.7.8-.6s.7.5.7 1-.4.7-.8.6-.7-.5-.7-1"
                                      style="fill:url(#New_swatch_2646)"/>
                                <path d="M218.4 206.2c0-.4.4-.7.8-.6s.7.5.7 1-.4.7-.8.6-.7-.5-.7-1"
                                      style="fill:url(#New_swatch_2647)"/>
                                <path d="m259.5 382.4-.5-4.2h1.7l1.3 4.5c-.8 0-1.5 0-2.4-.3Z"
                                      style="fill:url(#New_swatch_2673)"/>
                                <path d="M438.8 357.3c-3.6 14.9-6.5 28.3-10.1 43.2-4.8-.4-9.6-.7-14.3-.5 2.7-8.6 2.9-17.7.4-26.3-.7-2.6-1.6-5.5.1-7.6 1-1.2 2.5-1.9 4-2.5 7.8-3.2 15.5-6.5 19.7-6.2Z"
                                      class="st336"/>
                                <path d="M419.5 350.1c6.7-.4 15.7-.2 22.4.3-.4 6.8-1.8 10.3-3.6 15.6-5.4-.6-22.7-1.9-27.2-1.4 3.1-3.3 3.5-7.1 8.4-14.6Z"
                                      class="st352"/>
                                <path d="M138.7 374.1c-.7 4.3-.8 12.5-.8 12.5.7-.2 2.1.2 2.8 0q-.45-6.75.3-13.5c-.5.6-1.2 1-2.3 1"
                                      class="st322"/>
                                <path d="M141 373.2c.3 0 .9 0 1.2-.1-.3 2.5-.4 5-.4 7.5 0 1.1 0 2.1.2 3.1 0 .4.2.9.2 1.3s-.3.9-.7 1.1-1.1 0-1.2-.4c0 0 0-7.7.7-12.5"
                                      style="fill:url(#New_swatch_2591)"/>
                                <path d="M96 374.2c-.8 5.2-.9 10.5-.2 15.7.9-.2 1.7-.4 2.6-.7q-.6-8.1.3-16.2c-.6.7-1.4 1.2-2.7 1.2"
                                      style="fill:url(#New_swatch_2592)"/>
                                <path d="M98.7 373.2c.4 0 1.1-.1 1.5-.1-.3 3-.5 6-.5 9 0 1.3 0 2.5.3 3.8.1.5.2 1 .2 1.5s-.3 1.1-.9 1.3-1.3 0-1.5-.5c-.3-5-.2-9.9.8-14.9Z"
                                      style="fill:url(#New_swatch_2593)"/>
                                <path d="M107.7 374.2c-.8 5.2-.9 10.5-.2 15.7.9-.2 1.7-.4 2.6-.7q-.6-8.1.3-16.2c-.6.7-1.4 1.2-2.7 1.2"
                                      style="fill:url(#New_swatch_2594)"/>
                                <path d="M110.4 373.2c.4 0 1.1-.1 1.5-.1-.3 3-.5 6-.5 9 0 1.3 0 2.5.3 3.8.1.5.2 1 .2 1.5s-.3 1.1-.9 1.3-1.3 0-1.5-.5c-.3-5-.2-9.9.8-14.9Z"
                                      style="fill:url(#New_swatch_2595)"/>
                                <path d="M147.3 373.1s-1.6 10.4-.6 12.6 1.9 0 2.6-.1q-.45-6.75.3-13.5c-.5.6-2.3 1-2.3 1"
                                      style="fill:url(#New_swatch_2596)"/>
                                <path d="M149.6 371.4c.3 0 .9.7 1.2.7-.3 2.5-.4 5-.4 7.5 0 1.1 0 2.1.2 3.1 0 .4.2.9.2 1.3s-.3.9-.7 1.1-1.6 1-1.6.6c-.5-5 1.1-14.3 1.1-14.3"
                                      style="fill:url(#New_swatch_2597)"/>
                                <path d="M177.7 372.7c-.7 4.3-.7 8.7-.1 13.1.7-.2 1.4-.4 2.2-.5q-.45-6.75.3-13.5c-.5.6-1.2 1-2.3 1Z"
                                      style="fill:url(#New_swatch_2598)"/>
                                <path d="M180 371.8c.3 0 .9 0 1.2-.1-.3 2.5-.4 5-.4 7.5 0 1.1 0 2.1.2 3.1 0 .4.2.9.2 1.3s-.3.9-.7 1.1-1.1 0-1.2-.4c-.3-4.2-.2-8.2.7-12.5"
                                      style="fill:url(#New_swatch_2599)"/>
                                <path d="M169.1 372.7c-.7 4.3-.7 8.7-.1 13.1.7-.2 1.4-.4 2.2-.5q-.45-6.75.3-13.5c-.5.6-1.2 1-2.3 1Z"
                                      style="fill:url(#New_swatch_25910)"/>
                                <path d="M171.3 371.8c.3 0 .9 0 1.2-.1-.3 2.5-.4 5-.4 7.5 0 1.1 0 2.1.2 3.1 0 .4.2.9.2 1.3s-.3.9-.7 1.1-1.1 0-1.2-.4c-.3-4.2-.2-8.2.7-12.5"
                                      style="fill:url(#New_swatch_25911)"/>
                                <path d="M185.6 372.4c-.7 4.3-.7 8.7-.1 13.1.7-.2 1.4-.4 2.2-.5q-.45-6.75.3-13.5c-.5.6-1.2 1-2.3 1Z"
                                      style="fill:url(#New_swatch_25912)"/>
                                <path d="M187.9 371.5c.3 0 .9 0 1.2-.1-.3 2.5-.4 5-.4 7.5 0 1.1 0 2.1.2 3.1 0 .4.2.9.2 1.3s-.3.9-.7 1.1c-.5.2-1.1 0-1.2-.4-.3-4.2-.2-8.2.7-12.5"
                                      style="fill:url(#New_swatch_25913)"/>
                                <path d="M194.1 372c-.5 4.4-.3 8.8.5 13.1l2.1-.6c-.5-4.5-.7-9-.4-13.5-.5.6-1.1 1-2.2 1.1Z"
                                      style="fill:url(#New_swatch_25914)"/>
                                <path d="M196.3 371.1c.3 0 .9-.1 1.2-.1-.1 2.5-.2 5 0 7.5 0 1 .1 2.1.4 3.1.1.4.2.8.2 1.3s-.2.9-.7 1.1-1.1 0-1.2-.4c-.4-4.1-.6-8.2.1-12.5"
                                      style="fill:url(#New_swatch_25915)"/>
                                <path d="M203.5 368.8c-.4 4.4-.1 8.8.7 13.1.7-.2 1.4-.4 2.1-.7-.6-4.5-.9-9-.6-13.5-.4.6-1.1 1-2.2 1.1"
                                      style="fill:url(#New_swatch_25916)"/>
                                <path d="M205.7 367.9c.3 0 .9-.1 1.2-.2 0 2.5 0 5 .1 7.5 0 1 .2 2.1.4 3.1.1.4.3.8.2 1.3s-.2.9-.7 1.1-1.1 0-1.2-.4c-.5-4.1-.7-8.2-.1-12.5Z"
                                      style="fill:url(#New_swatch_25917)"/>
                                <path d="M212.2 369c-.3 4.4.1 8.3.9 13.1.7-.2 1.4-.4 2.1-.7-.7-4.5-.9-9-.8-13.5-.4.6-1.1 1-2.2 1.1"
                                      style="fill:url(#New_swatch_25918)"/>
                                <path d="M214.4 368c.3 0 .9-.2 1.2-.2 0 2.5 0 5 .2 7.5 0 1 .2 2.1.5 3.1.1.4.3.8.3 1.3s-.2.9-.7 1.1-1.1 0-1.2-.3c-.3-3.3-.8-8.2-.3-12.5"
                                      style="fill:url(#New_swatch_25919)"/>
                                <path d="M469.6 333.2c-1.2 1.5-2.6 2.1-4.4 1.4-2.3-.9-2.9-3.7-3.2-6.1-1.1-8.7 4.4-31.8 5.3-40.9.1.1.6 1.6.6 2.1-1 9.4-6.3 30.5-4.2 39.7.4 1.7 1.2 3.6 3 3.7 4 .2 6-10.6 7.1-17.8 1.2-7.5 2-20.5 2.1-28.1 0 3.2.5 4.5.7 4.6.4 8-3.5 36.9-7 41.3Z"
                                      style="fill:url(#New_swatch_2648)"/>
                                <path d="M108.8 372.7c36.9-2.5 73.6-3.5 109.9-7.8-.3 1.7-.6 3.4-.8 5-41.9 4.9-96.4 7-127.2 5.7 7.2-1.6 14.4-2.7 18.1-2.9"
                                      class="st594"/>
                                <path d="M103.3 370.9c40-.9 79-2.8 115.4-7.2-.3 1.7-.6 3.4-.8 5-41.9 4.9-96.4 7-127.2 5.7 7.2-1.6 9-3.5 12.6-3.6Z"
                                      class="st361"/>
                                <path d="M89.3 374.4a72 72 0 0 0-.2 20.7l3.4-.9c-.5-7.1-.4-14.3.4-21.4-.8.9-1.9 1.5-3.6 1.5Z"
                                      style="fill:url(#New_swatch_25920)"/>
                                <path d="M92.9 373c.6 0 1.4-.2 2-.2-.4 3.9-.6 7.9-.6 11.9 0 1.7 0 3.3.4 5 .1.7.3 1.4.3 2s-.4 1.4-1.2 1.7-1.8 0-1.9-.7c-.4-6.6-.3-13 1.1-19.8Z"
                                      style="fill:url(#New_swatch_25921)"/>
                                <path d="M101.4 369.6a72 72 0 0 0-.2 20.7l3.4-.9c-.5-7.1-.4-14.3.4-21.4-.8.9-1.9 1.5-3.6 1.5Z"
                                      style="fill:url(#New_swatch_25922)"/>
                                <path d="M105.1 368.3c.6 0 1.4-.2 2-.2-.4 3.9-.6 7.9-.6 11.9 0 1.7 0 3.3.4 5 .1.7.3 1.4.3 2s-.4 1.4-1.2 1.7c-.7.3-1.8 0-1.9-.7-.4-6.6-.3-13 1.1-19.8Z"
                                      style="fill:url(#New_swatch_25923)"/>
                                <path d="m146.8 110 11.9 386.7 18 11.8-26.9-398.8z"
                                      style="fill:url(#New_swatch_2631)"/>
                                <path d="M128.8 139.7c-.9 1.2-1.7 2.3-2.5 3.2-4.9 5.8-7 5.6-10.9 5.3-.8 0-1.6-.1-2.5-.1-2.7 0-6.3.2-11.6 1.9h-.1c-1.9.6-3.6 1-5 1.3-2.7.4-4.6.2-6-.3-3.7-1.2-5.1-3.8-13.3-.4.4-1.7 1.2-5.1 2.6-7.4 1-1.5 2.2-2.5 3.8-2.3 4.5.5 7.1 1.5 9.1 2.1 1.5.5 2.5.7 3.7.3q.9-.3 1.5-.6c3.8-1.7 5.1-3.7 6.3-6.7.6-1.6 1.2-3.6 2.1-6 8.6-1.2 15.8 3.6 22.7 10Z"
                                      class="st476"/>
                                <path d="M150.5 141c-.3-.1-.6-.3-.9-.4-1.5-.6-3-1.3-4.5-1.8-2.5-.9-5-1.5-7.6-1.5s-5.3.6-6.8 1.5c-.6.4-1.2.8-1.7 1.3a5 5 0 0 1-6.2.6c-5.3-3.5-12-4.7-16-5.4-.5 0-1-.4-1.3-.8s-.5-1-.4-1.6c.7-3.8 3.5-7.2 6.9-9.3 4-2.4 8.7-3.2 13.3-3.9 4.1-.6 8.3-1 12.4-1.4l4.9-.3h2c.6 0 1.2.2 1.7.5 1.3.9 1.7 2.6 1.8 4.2l1.2 10 .3 2.6c.2 1.9.5 3.8.7 5.7Z"
                                      class="st476"/>
                                <path d="M143.2 121.9c1 2.1-2.7 3.2-4.9 4-2.5.8-8.9-2.4-15.8.2-3.1 1.2.8 6.3 1.5 7.5s1.3 2.9.4 4c-6.3-1-12.6-2.1-18.9-3.1-.3-.4-.5-1-.4-1.6.7-3.8 3.5-7.2 6.9-9.3 4-2.4 8.7-3.2 13.3-3.9 4.1-.6 8.3-1 12.4-1.4 1.7.8 4.6 1.9 5.4 3.6Z"
                                      class="st50"/>
                                <path d="M145 138.8c-2.5-.9-5-1.5-7.6-1.5s-5.3.6-6.8 1.5c-1.6-1.3-3.2-2.8-3.4-4.9-.2-2.5 2.3-4.7 4.8-4.9s5 1 7 2.6c2.4 1.9 4.4 4.3 5.8 7 0 0 0 .2.1.2Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient3)"/>
                                <path d="M96.3 150.9v.3c-2.7.4-4.6.2-6-.3-.5-.5-1-1-1.4-1.5a27 27 0 0 0-9.3-6.3c1-1.5 2.2-2.5 3.8-2.3 4.5.5 7.1 1.5 9.1 2.1-.4.4-.8.7-1 1.2-.3.8.2 1.8.8 2.4.8.7 1.8 1.2 2.6 1.8s1.6 1.7 1.4 2.7Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient4)"/>
                                <path d="M112.9 148c-2.7 0-6.3.2-11.6 1.9-1.1-.9-2.2-1.9-3-3.1-.1-.2-.3-.4-.2-.6 0-.2.3-.4.6-.4 4.7-1.6 10.2-.7 14.3 2.1Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient5)"/>
                                <path d="M149.8 139c0 .5 0 1.1-.2 1.6-1.5-.6-3-1.3-4.5-1.8-.9-2.4-2-4.8-3.6-6.8-2.1-2.5-5.2-4.4-8.4-4.2-3.3.2-8.4 4.6-9.1 3.2s-.7-3.2.4-4.3c.9-1 2.4-1.2 3.8-1.3 4.1-.2 8.2 0 12.2.7 1.2.2 2.6.4 3.5-.4.7-.6.9-1.7.7-2.7-.2-.9-.7-1.8-1.2-2.6-.4-.6-.7-1.3-.7-2 0-.2 0-.3.1-.5h2c0 .2.2.3.2.5 1.8 4.6 3.7 9.3 4.5 14.2l.3 2.6c0 1.2.1 2.5 0 3.7Z"
                                      class="st116"/>
                                <path d="M126.4 142.8c-4.9 5.8-7 5.6-10.9 5.3.1-.5.2-1 0-1.5-.3-1-1.3-1.7-2.3-2.1-3.6-1.7-7.8-2.1-11.7-1.2-1 .2-2.3.6-3.1-.1-.2-.2-.4-.4-.5-.7 3.8-1.7 5.1-3.7 6.3-6.7 2.2 2.6 6.6 1.5 10 2.3 3.8.9 5.9 2.1 10.5 4.3s1.2.3 1.8.5Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient7)"/>
                                <path d="M120.2 124.8c-3.7.9-7.6 1.9-10.1 4.7-.5.6-1 1.3-.8 2s.9 1.2 1.6 1.5c2.6 1.1 5.5 1.5 8.3 1.1.9-.1 2-.5 2.2-1.5.1-.9-.8-1.6-1.5-2.3-1.3-1.2-2.1-3 .3-5.5"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient8)"/>
                                <path d="M140.3 133.8c-1.6-1.4-3.7-2-5.7-2.6-.6-.2-1.2-.3-1.8-.4s-1.2.1-1.7.6c-.4.4-.6.9-.5 1.4s.5.9 1 1c.9.2 1.6-.7 2.4-.9.9-.3 1.8 0 2.6.6s1.5 1.1 2.3 1.4 2.3 0 1.2-1Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient9)"/>
                                <path d="M212.9 298.5 61.6 312.7c-1.2.2-2.1 1-2.4 2.2-.5 2 1.2 3.9 3.3 3.5L213 301.9v-3.3Z"
                                      style="fill:url(#New_swatch_2674)"/>
                                <path d="M65.8 317.3s1.2.1 1.3.2c48.9 66.8 87.5 93.6 106.7 107.4 0 0 .5.7 0 .7-59.7-45-77.1-69.2-108-108.3"
                                      style="fill:url(#New_swatch_2649)"/>
                                <path d="M114.8 365.8a72 72 0 0 0-.2 20.7l3.4-.9c-.5-7.1-.4-14.3.4-21.4-.8.9-1.9 1.5-3.6 1.5Z"
                                      style="fill:url(#New_swatch_25924)"/>
                                <path d="M118.5 364.5c.6 0 1.4-.2 2-.2-.4 3.9-.6 7.9-.6 11.9 0 1.7 0 3.3.4 5 .1.7.3 1.4.3 2s-.4 1.4-1.2 1.7c-.7.3-1.8 0-1.9-.7-.4-6.6-.3-13 1.1-19.8Z"
                                      style="fill:url(#New_swatch_25925)"/>
                                <path d="M129.1 360.8a72 72 0 0 0-.2 20.7l3.4-.9c-.5-7.1-.4-14.3.4-21.4-.8.9-1.9 1.5-3.6 1.5Z"
                                      style="fill:url(#New_swatch_25926)"/>
                                <path d="M132.7 359.4c.6 0 1.4-.2 2-.2-.4 3.9-.6 7.9-.6 11.9 0 1.7 0 3.3.4 5 .1.7.3 1.4.3 2s-.4 1.4-1.2 1.7-1.8 0-1.9-.7c-.4-6.6-.3-13 1.1-19.8Z"
                                      style="fill:url(#New_swatch_25927)"/>
                                <path d="M88.4 375.6c.8 0 3.4-.2 3.8 0 7-4.4 31.2-11.9 48.7-15.6-2.8-.8-5.7-1.2-8.7-1-1.7.5-3.3.9-5 1.4-6.8 1.9-13.6 3.8-20.1 6.3s-12.6 5.2-18.8 9Z"
                                      style="fill:url(#New_swatch_25928)"/>
                                <path d="M88.4 375.6c15.3-6.9 31.5-12.3 48.2-16l.5-4.6c-17.2 3.1-32.4 8.8-48.1 15.8-.2.8-.9 2.5-.6 4.8"
                                      style="fill:url(#New_swatch_25929)"/>
                                <path d="m137.1 355 4.3.3-.5 4.7-4.3-.4z" style="fill:url(#New_swatch_25930)"/>
                                <path d="m159.1 177.2-81.9-4.9c-.4 0-.7-.2-1-.4-1-1-.2-2.7 1.2-2.6l86.1 6.3-4.4 1.7Z"
                                      style="fill:url(#New_swatch_2675)"/>
                                <path d="M65.8 316.7c55.3-12.5 100.8-19.7 119.5-16.5 4.3.7 7.1 2 8.4 3.8 22.7-25.9 47.3-88.7-17.7-130.9 1 10.3-47.9 7.8-95.9-3.3 37.6 73.3-6.6 128.1-14.2 146.7v.2Z"
                                      class="st476"/>
                                <path d="M110.5 223c-2.3-3.2-12.5-24.9-15.7-28.6 9.1 23.8 18.5 39.5 10.1 71.9-1.7 6.4-14.5 24.1-8.2 17.8 6.1-4.9 11.4-10.7 15.6-17.3 16.3 2.6 33.3.6 48.5-5.9 4.4-1.9 8.7-4.1 13.3-5.4s9.7-1.7 14.1.2c2.3 1 4.4 2.6 6.9 2.8 2.8.2 5.4-1.4 7.7-3 2.6-1.7 5.3-3.5 7.3-5.9 3.8-4.3 5.2-10.1 6.5-15.7 1.4-5.9 2.7-12.4-.3-17.6-3.1-5.4-9.6-7.5-14.9-10.8-8.4-5.2-14-13.7-19.4-22 1.7.4 1.7 3.1.3 4.1s-3.3.9-5 .7l-52.5-5.4c10.5 3.7 21.7 7.4 32.6 5.1-13.1 8.9-31.9 8.4-44.4-1.4 3.6 5.8 10.9 7.8 17.6 9.5 6.4 1.6 20.3 3.1 15.4 4.5-11.8 5.1-31.7 4.1-44.5-7.4 9.2 12.2 16.4 25.9 21.1 40.5-7.6-3-7.5-4.3-12.2-10.9Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient10)"/>
                                <path d="M116.5 205.4c6.4.9 12.9 1.9 19.4 1.8s13.1-1.3 18.8-4.3c1.4-.7 2.9-1.9 2.9-3.5 0-1.5-1.4-2.6-2.8-3.1s-2.9-.7-4.1-1.6c4.5-2 9-4.1 13.5-6.1.6-.3 1.3-.6 2-.4s1.1.9 1.4 1.5c3.5 7.1 2.6 15.7-.6 23s-8.5 13.3-13.7 19.3c-7 8.1-14.5 16.5-24.5 20.3-3.6 1.3-8.2 1.8-10.7-1.1 4.7-5.3 9.5-10.7 11.9-17.4.7-2 1.2-4.3.8-6.4-1.5-7-11.9-9.1-14.2-22Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient11)"/>
                                <path d="M65.8 316.7c55.3-12.5 100.8-19.7 119.5-16.5 1.7-.7 3.4-1.5 5.1-2.2l-3.6-31.7c-2.4-.9-4.9-1.7-7.5-2.2-4.3-.9-8.6-1.1-12.8-2.2s-8.4-3.4-10.5-7.1c-2.6.6-3.4 3.9-3.4 6.6s.3 5.8-1.6 7.6c-1.1 1-2.7 1.4-4.2 1.7-12.8 2.6-25.7 5.3-38.5 7.9-5.1 1-21 20.1-20.4 14.9.7-5.7 10-27.3 11-31-4 6.9-28.9 44.6-32.9 54.1v.2Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient12)"/>
                                <path d="M129.7 382.9c28.7-2.7 58.3-3.1 86.3-3.1-1.4 16.3-.5 29.2 5.3 42.8-23.3-.9-46.8 1.2-69.4 6.2-3.7.8-8.2 1.6-10.9-.8-1.5-1.3-1.9-3.3-2.2-5.1-2.7-14.5-5.4-29-9.1-40"
                                      style="fill:url(#New_swatch_2632)"/>
                                <path d="M129.7 382.9c28.7-2.7 58.2-3.1 86.3-3.1-1.4 16.3-.5 29.2 5.3 42.8-23.3-.9-46.8 1.2-69.4 6.2-3.7.8-8.2 1.6-10.9-.8-1.5-1.3-1.9-3.3-2.2-5.1-2.7-14.5-5.4-29-9.1-40"
                                      class="st135"/>
                                <path d="M142.3 400.1c-18.8 3.1-36.5 7.8-53.9 13.1v-.7c-.3-5.2-.6-10.4-.8-15.6v-1.1c-.1-2.4-.3-4.8-.4-7.2 14.5-1.2 28.8-5 41.5-11.2q-.75 3.9.3 7.8a22.67 22.67 0 0 0 13.5 14.9Z"
                                      style="fill:url(#New_swatch_2633)"/>
                                <path d="M140.4 397c-.9.2-1.7.4-2.6.7a589 589 0 0 0-49.5 14.9c-.3-5.2-.6-10.4-.8-15.6 1.5-.8 3.1-1.4 4.7-2 1.5-.6 3-1 4.6-1.5-.3.3-.6.5-1 .8-2 1.6-4.4 2.9-6.9 3.9 10.2-1.2 20.1-3.7 29.5-7.3-1.9.4-3.9.9-5.8 1.3.3-.1.5-.3.8-.4-3.3.4-6.5.9-9.8 1.3.7-.2 1.4-.4 2.2-.7 6.9-2.1 13.7-4.3 20.6-6.4.8-.3 1.6-.5 2.5-.8 1-.4 2-.7 3-1.2.8-.4 1.5-.8 2.2-1.3.6 5.2 2.8 10.2 6.4 14.3Z"
                                      style="fill:url(#linear-gradient14);mix-blend-mode:multiply"/>
                                <path d="M133.7 387.3c-1.3.2-4.2-2.4-5.6-2.3-18.3 1.6-39 8.8-40.8 9.1-.1-2.4-.2-3.1-.3-5.5 14.5-1.2 28.8-5 41.5-11.2q-.75 3.9.3 7.8c1-.4 2-.7 3-1.2.5 1.1 1.1 2.2 1.9 3.3"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient15)"/>
                                <path d="M211.3 379.8h7.8c0 13.4 2.6 25.1 6.4 27.6-4.3 1.7-4.6 21.4-8.1 18.7-1.3-1 .7-23.3-.9-23.9-6.9-2.5-5.3-22.3-5.3-22.3Z"
                                      class="st408"/>
                                <path d="M173.7 397s83.3 1.3 84.3.8c-6.6 8.7-15.5 15.7-24.5 22.7s-20 12.4-32 13.8-25-1.6-33.3-9.1-11-19.8 5.5-28.1Z"
                                      style="fill:url(#New_swatch_2634)"/>
                                <path d="M249.1 406.4c-27-1.3-61.4-3-88.3-.5 27 1.9 54 3.9 81.1 5.8-2.8 1.2-5.3 3-7.1 5.2-6.8-2.1-14-2.5-21.2-2.9-17.9-1-35.8-1.8-53.7-2.5 5.7 1.8 7.5 8 12.1 11.5 3.3 2.5 7.9 3.5 12.3 4 13.3 1.7 26.9 1.1 40.4.4 2.9-.1 5.8-.3 8.3-1.6 1.6-.8 3-2.1 4-3.4 4.7-5.8 12.9-12.7 12.2-16Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient17)"/>
                                <path d="M194.1 20.2 216 431.8l21 12.3-39.3-424.2z"
                                      style="fill:url(#New_swatch_2635)"/>
                                <path d="M185.6 433c-27 1.4-61 4.3-95 4.1-.2-.8-.3-1.8-.5-2.7-.5-3.4-.9-7.4-1.2-10.9v-1.8c-.3-3.3-.4-6.1-.5-7.3v-.2c23.5-5.5 45.6-9.9 69.2-13.7 2.3-.4 4.7-.8 7.1-1.1v5.4c0 .6.1 1.2.2 1.9v.6c0 .4 0 .8.1 1.2v.3c0 .3.1.6.1.9v.9c.2 1.4.4 2.7.8 4.1 0 .1 0 .3.1.4l.3 1.2q.6 1.95 1.5 3.9c1.4 3 3.5 5.8 6.2 8.1 3.2 2.7 7.1 4.5 11.5 4.9Z"
                                      style="fill:url(#New_swatch_2636)"/>
                                <path d="M187 425.8c-4.3.9-8.6 1.6-12.9 2.2-9.3 1.2-18.8 1.9-28.2 2.5-18.6 1.3-37.2 2.5-55.8 3.8-.5-3.4-.9-7.4-1.2-10.9 2.4-.5 6.5-1.2 10.4-1.9 3.5-.6 6.9-1.2 9.1-1.6-.9.4-2.4 1-4.1 1.5-3.6 1.2-8.2 2.5-10.1 3.4 14.1-.3 28.1-1.7 41.8-4.2h-11.6c.3 0 .7-.2 1-.2l39.9-9.9 5-1.2c2.3-.6.5 0 2.8-.5 1.5 6.7 5.1 15.6 14 17.2Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient18)"/>
                                <path d="M174.1 414.9c-2.3.4-1.2 2.8-3.9 3.3-11.2 1.7-28.2 1.5-27.4 1.3-3.7.3-7.3.7-11 1.1-6 .7-12.1 1.6-18.1 2.6-5.3.5-10.7.6-16 .3-1.2 0-2.5-.2-3.7-.3-.9 0-1.7-.2-2.5-.3l-2.7-.3v-.2c.5 0 .9-.2 1.4-.3 5.9-1.1 11.8-2.1 17.6-3 2.8-.4 5.5-.8 8.2-1.1 9.6-1.2 19.1-2 28.5-2.6q9.45-.45 18.9-.6h10.7Z"
                                      class="st97"/>
                                <path d="M173 416c-2.5.6-5.7 1.1-9.4 1.5-8.2 1-19.2 1.9-32.5 3-21.5 1.9-38.8 2.8-42.3 2.8v-1.2c0-.8-.1-1.6-.2-2.5-.2-2.6-.3-4.9-.3-5.7 23.5-5.5 45.6-9.9 69.2-13.7 2.3-.4 4.7-.8 7.1-1.1v1.8c0 1.3 0 2.5.2 3.7 0 1.2.2 2.4.3 3.6v.3l.3 1.7 5-1.2v4.1c-1.5.5 3.3 2.7 2.9 2.8Z"
                                      style="fill:url(#New_swatch_2637)"/>
                                <path d="M170.2 409.1v4.1c-1.3.4 7 2.8 5.5 3.1-8.6 1.9-24.4 2.4-44.5 4.2-21.5 1.9-38.8 2.8-42.3 2.8 0-1.2-.2-2.4-.3-3.6 11 .5 22.1-.4 32.8-2.7-5.6.1-11.3.2-16.9.4 13.9-.8 27.7-3.1 41-6.7-3.4 2.1-7.3 3.4-11.4 4 10.6-.3 21.2-2.3 30.9-6.1 0 .6.1 1.1.2 1.7z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient20)"/>
                                <path d="M169 413c-.2.9-4.8 3.9-5.4 4.5-8.2 1-19.2 1.9-32.5 3-21.5 1.9-38.8 2.8-42.3 2.8v-1.2c16.4-2.6 19.7-.5 29.5-1.2 16-.6 51.1-9.4 50.8-8Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient21)"/>
                                <path d="M164.5 401c-45.9 9.9-62.2 14.2-75.9 14.7-.4-4.3-.3-.4-.3-1.7 23.5-5.5 45.6-9.9 69.2-13.7l7.1-.6h.5c-.2.2-.3 1.3-.5 1.4Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient22)"/>
                                <path d="M130.7 381.6c-.9.1-1.9.3-2.8.5l-5.5 1.2c-12.8 3.1-25.7 8.1-36.5 10.2l.3-6.2c0-.9 0-1.8.1-2.8 15.6-3 24.8-9 43.9-12-.3 2.9-.2 5.9.4 8.8v.2Z"
                                      style="fill:url(#New_swatch_2771)"/>
                                <path d="M130.1 392.9c.6 1.8 1.3 3.6 2.6 4.5s2.9.4 4.4-.3c1.4-.7 2.8-2.5 4.3-2.5-3.1-1.2-4.6-.5-5-3.9-.3-2.6-.5-7.2-.6-11.4-1.7.1-3-1.2-2.6-2.6.3-.9 1.1-1.5 2.2-1.6h.3v-2l-5.8-.5c-1.3 8.2-1.5 14.4.4 20.2Z"
                                      style="fill:url(#New_swatch_2772)"/>
                                <path d="M130.1 392.9c.6 1.8 1.3 3.6 2.6 4.5s2.9.4 4.4-.3c1.4-.7 2.8-2.5 4.3-2.5-3.1-1.2-4.6-.5-5-3.9-.3-2.6-.5-7.2-.6-11.4-1.7.1-3-1.2-2.6-2.6.3-.9 1.1-1.5 2.2-1.6h.3v-2l-5.8-.5c-1.3 8.2-1.5 14.4.4 20.2Z"
                                      class="st269"/>
                                <path d="M140.2 394.8c-1.9 1.1-4.1 2-6.4 2.2s-1.8 1.9-4.1 1.6c-3.6-.6-5.5-1.7-6.3-3.5-.6-1.3-.8-4.9-1-11.7V381c0-1.2 0-2.6-.1-4v-2.6l8.2-1.7c.1 3.2.2 6.2.4 8.8v.2c.2 3.6.5 6.5.8 8.7.4 2.1.8 3.4 1.5 3.8.3.2.7.4 1.1.6.3.1.6.2 1 .3 1.9.4 3.9 0 5.2-.2Z"
                                      style="fill:url(#New_swatch_2773)"/>
                                <path d="M123.4 399.7c.6-1.2 1.4-1.8 1.7-2.8 7.3-1.6 14.6-3.2 22.1-3.6-8.2 1.6-15.4 4.4-23.7 6.4Z"
                                      style="fill:url(#New_swatch_2774)"/>
                                <path d="M170 393.2c-.3 1.2-.7 2.5-.9 4.6l-6 1.5c-1.9.5-3.8.9-5.6 1.4-40.4 9.9-64.2 15.2-71.6 14.1v-7.4c13.9 0 35.5-10 83.4-19.9 1.4 2.6 1.2 3.9.7 5.7"
                                      style="fill:url(#New_swatch_2775)"/>
                                <path d="M189.7 429.5c-2.7 1.3-1.1 2.2-3.1 4l-.1.1c-4.8-1.3-6.1-3.6-9.6-4.1-.9-.1-1.9-.1-3.1 0-12.9 1.5-15.7-16.3-16.2-29 0-2.3-.1-4.3 0-6.1v-4.2l11.8-2.8c.1 1.9.3 3.8.7 5.7 1.2 6.3 3.5 12.4 5.8 18.3 2.4 6.1 4.2 12.3 9.4 15.9 1.3.9 2.7 1.6 4.4 2.1Z"
                                      style="fill:url(#New_swatch_2776)"/>
                                <path d="M187.8 438.9c-4.1-2.7-5.9-10.1-11-9.3-7.3 1.2-11.1-16.1-12.7-25.2.9-1 1.8-2.1 2.7-3.1-1-.2-3.4.5-3.3 0 0 0-.7-6.1-.5-8.6-11.8 2-14.1 1.9-39.7 8.9-11.6 3.2-25.5 7.8-37.5 6.4v-.6c13.9 0 35.5-10 83.4-19.9 1.4 2.6 1.2 3.9.7 5.7 1.2 6.3 3.5 12.4 5.8 18.3 2.4 6.1 4.2 12.3 9.4 15.9.4 2 .8 4.1 1.3 6.1l1.2 5.4Z"
                                      class="st45"/>
                                <path d="m153.4 407.1 2 7.2c.2.6-.1 1.2-.7 1.4-.5.2-1.1 0-1.3-.6-.6-1.3-1.8-5.2-2.6-7.1.7-.4 1.4-.8 2.6-.9"
                                      style="fill:url(#New_swatch_1964)"/>
                                <path d="m147 408.8 2.2 6.2c.2.6-.1 1.2-.7 1.4-.5.2-1.1 0-1.3-.6-.6-1.3-2-4.2-2.8-6 .7-.4 1.4-.8 2.6-.9Z"
                                      style="fill:url(#New_swatch_1965)"/>
                                <path d="m140.3 410.3 1.8 6.2c.2.6-.1 1.2-.7 1.4-.5.2-1.1 0-1.3-.6-.6-1.3-1.6-4.2-2.4-6 .7-.4 1.4-.8 2.6-.9Z"
                                      style="fill:url(#New_swatch_1966)"/>
                                <path d="m133.6 411.9 1.9 5.7c.2.6-.1 1.2-.7 1.4-.5.2-1.1 0-1.3-.6-.6-1.3-1.7-3.7-2.5-5.6.7-.4 1.4-.8 2.6-.9"
                                      style="fill:url(#New_swatch_1967)"/>
                                <path d="m154.8 404.8-27.4 5.8 1.2 3.5 27.8-5.9z"
                                      style="fill:url(#New_swatch_2723)"/>
                                <path d="m158.4 403.1-3.3 2.4 1.3 2.7 3.2-2.3z" style="fill:url(#New_swatch_2724)"/>
                                <path d="m158.4 403.1-3.3 2.4 1.3 2.7 3.2-2.3z"
                                      style="mix-blend-mode:multiply;fill:url(#New_swatch_2725)"/>
                                <path d="m127.4 410.4 3-1.4 28-5.9-3.3 2.4z" style="fill:url(#New_swatch_2726)"/>
                                <path d="M199.6 123.6 152.3 405l-1 .5 48.2-285.1z"
                                      style="fill:url(#New_swatch_1284)"/>
                                <path d="m199.6 123.6-53.9 282.8-1 .5 54.8-286.5z"
                                      style="fill:url(#New_swatch_1285)"/>
                                <path d="m153 405.4.5-4.3-2.1.2-1.3 4.8c.9-.2 1.8-.3 2.8-.7Z"
                                      style="fill:url(#New_swatch_2676)"/>
                                <path d="m146.4 406.6.7-4.3-2.1.2-1.4 4.8c.9-.2 1.8-.3 2.8-.7"
                                      style="fill:url(#New_swatch_2677)"/>
                                <path d="m199.6 123.6-60.3 283.9-.9.5 61.1-287.6z"
                                      style="fill:url(#New_swatch_1286)"/>
                                <path d="m140 407.7.7-4.3-2.1.2-1.4 4.8c.9-.2 1.8-.3 2.8-.7"
                                      style="fill:url(#New_swatch_2678)"/>
                                <path d="m199.7 123.7-67.1 284.6-.9.5 67.9-288.3z"
                                      style="fill:url(#New_swatch_1287)"/>
                                <ellipse cx="156.4" cy="303.6" rx="1.5" ry="1.6" style="fill:url(#New_swatch_26410)"
                                         transform="rotate(-13.5 155.63 302.86)"/>
                                <ellipse cx="160.7" cy="303.7" rx="1.5" ry="1.6" style="fill:url(#New_swatch_26411)"
                                         transform="rotate(-13.5 160.33 302.98)"/>
                                <ellipse cx="164.8" cy="303.7" rx="1.5" ry="1.6" style="fill:url(#New_swatch_26412)"
                                         transform="rotate(-13.5 164.18 303.01)"/>
                                <ellipse cx="169.2" cy="303.7" rx="1.5" ry="1.6" style="fill:url(#New_swatch_26413)"
                                         transform="rotate(-13.5 168.46 303.09)"/>
                                <circle cx="178" cy="212.9" r=".8" style="fill:url(#New_swatch_26414)"/>
                                <circle cx="180.1" cy="213.3" r=".8" style="fill:url(#New_swatch_26415)"/>
                                <circle cx="182.1" cy="213.7" r=".8" style="fill:url(#New_swatch_26416)"/>
                                <circle cx="184.2" cy="214" r=".8" style="fill:url(#New_swatch_26417)"/>
                                <path d="m133.3 408.6.9-4.3-2.1.2-1.6 4.8c.9-.2 1.8-.3 2.8-.7"
                                      style="fill:url(#New_swatch_2679)"/>
                                <path d="M169.3 387.5c-.6 8.6 0 30.4 6.2 37.1 5 5.4 13.6 5.1 20.8 8.2l5.6-4.4c-3.3-1.6-15.6-2.9-18.6-4.9-7.6-4.9-8-27.6-7.4-34.6l-6.5-1.5Z"
                                      style="fill:url(#New_swatch_2777)"/>
                                <path d="M169.3 387.5c-.6 8.6 0 30.4 6.2 37.1 5 5.4 13.6 5.1 20.8 8.2l5.6-4.4c-3.3-1.6-15.6-2.9-18.6-4.9-7.6-4.9-8-27.6-7.4-34.6l-6.5-1.5Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient25)"/>
                                <path d="M167.5 428.6s5.7-1.5 11.5-1.6c9.6-.3 19.3 0 28.9 1-34.3 4.4-40.4.7-40.4.7Z"
                                      style="fill:url(#New_swatch_2778)"/>
                                <path d="m130.3 505.2-32.7-.2c.8-5.5 1.3-11 1.3-16.5 2.3-.6 4.5-1.2 6.8-1.9.3-4.1.5-8.1.6-12.2v-.1c0-3.8 0-7.5-.1-11.3 4.1-1.3 7.8 1.4 10.2 4.5 2.4 3.2 3.7 6.8 4.9 10.4.2.7.5 1.4.7 2.1 1.3 3.9 2.6 7.7 3.5 11.6.2.7.4 1.5.5 2.2q.6 2.55.9 5.1c.3 2.4.8 5.2 3.4 6.1Z"
                                      style="fill:url(#New_swatch_2638)"/>
                                <path d="M102.6 467.1c9.1 16.8 12.2 22.6 15.3 38.1 16.6 2.3 35.6 2.6 52.4 1.5-20.3-12.1-42.9-24.5-67.7-39.6"
                                      style="fill:url(#New_swatch_26418)"/>
                                <path d="M223 512c-11.8-.8-23.7-1.5-35.5-2.3l-69.6-4.5c0-6.5-1.2-13-3.4-19.2-1.1-3.1-2.4-6.1-4-9.1-1-1.9-2.2-3.8-3.4-5.6 4 1 6 2 8.1 3.1 2 1.3 4.1 2.5 6.3 3.7 13.7 7.1 29.9 11 45.5 15.2 1.3.4 2.6.7 3.9 1.1 17.7 5 34.9 11.3 52.1 17.5Z"
                                      style="fill:url(#New_swatch_2639)"/>
                                <path d="M128.8 502.8c1.1-1.2 1-3 0-4.4-.9-1.4-2.3-2.4-3.7-3.4-3.8-2.8-7.4-5.8-10.8-8.9-1.1-3.1-2.4-6.1-4-9.1 3.6.2 7.3.6 11 1.2 15.1 2.3 31.1 7.5 45.5 15.2 2.6 1.4 5.2 2.9 7.7 4.5 5.1 3.2 10.1 7.1 12.8 11.9l-69.6-4.5c2.2-.3 4.4-.5 6.6-.8 1.6-.2 3.3-.6 4.3-1.6Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient26)"/>
                                <path d="M193.7 506.3c-8.9.9-18 1.1-26.9.3-6-.5-11.9-1.4-17.6-2.9-8.3-2.1-16.3-5.4-23.2-9.7-5.1-3.2-9.7-7-13.4-11.4q-3.6-3.9-6.3-8.1c-6.3-10-9.2-21.6-8-33q.3-2.7.9-5.4c4.4 5.2 8.4 10.7 12.4 16 1.7 2.3 3.4 4.5 5.2 6.7.6.7 1.1 1.4 1.7 2 3.6 4.4 7.5 8.6 11.9 12.3 5.5 4.6 11.6 8.5 18 12.2 6.4 3.6 13 6.9 19.5 10.3 2.6 1.4 5.2 2.8 7.7 4.2 1 .6 1.9 1.1 2.9 1.7 4.8 2.7 9.8 5.1 15.4 4.8Z"
                                      style="fill:url(#New_swatch_26419)"/>
                                <path d="m433.1 359.3-3.4 15.2-3.3 14.8c-.8 3.7-1.7 7.4-2.5 11.2-1.7 7.6-4.1 26.1-4.4 27.8-4.3 18.6-7.4 19.8-7.8 21.1q-1.05 2.85-2.4 5.7a68 68 0 0 1-9.9 15.8c-1.2 1.4-4.3 4.7-4.3 4.7l.7.2s-16.5 14.3-30.1 20.1c-16.5 7-40.6 8.4-58.6 11.3 22.1-9.4 51.7-15.8 66.6-32.5.3-.3.5-.6.7-.8.2-.3.5-.6.7-.9.9-1.1 1.8-2.3 2.7-3.4.3-.5.7-.9 1-1.4 3.9-5.5 7-11.4 9.7-17.5.8-1.7 1.5-3.4 2.2-5.1.3-.6.5-1.2.8-1.8 2.6-6.2 5.1-12.5 7.3-18.9.8-2.2 1.5-4.4 2.2-6.6 2.2-7 4-14 5.4-21.1.2-1 .4-1.9.5-2.9.8-4.7 1.4-9.3 1.7-14 .3-4 .3-8.1.2-12.1 7.5-2.1 15-4.2 24.5-8.9Z"
                                      style="fill:url(#New_swatch_26310)"/>
                                <path d="M417.9 360.9q-1.95 5.4-3.3 10.8c-3.1 11.5-4.8 23.3-6.7 35-.8 4.8-1.5 9.6-2.4 14.4-.6 3.2-1.2 6.5-2 9.7v.3c-.8 3.5-1.7 7.1-2.7 10.6v.2c-.4 1.5-.9 2.9-1.4 4.4-.5 1.4-.9 2.7-1.4 4 0 .2-.1.4-.2.6 0 .2-.2.4-.2.7l-.9 2.4c-.1.4-.3.7-.5 1.1A92 92 0 0 1 387 472c-.2.2-.3.5-.5.7l-.6.9c-1.2 1.6-2.4 3.2-3.7 4.8-10.4 12.4-24.6 18.3-40.2 22.5-5.3 1.4-10.7 2.6-16.2 3.8-10.2 1.4-19.8 2.6-29 3.5-5.6.6-10.9 1.1-16.1 1.5-16.3 1.4-30.9 2.1-43.9 2.2-11.7.1-22.1-.1-31.5-.7-5.6-.3-10.9-.8-15.8-1.3-1.5-.2-2.9-.3-4.3-.5a263 263 0 0 1-18-2.9c-21-4.3-31.3-9.9-35.7-12-2-.9-3.9-1.9-5.6-2.9-4.9-2.8-8.9-5.7-12.2-8.9-.9-.9-1.8-1.8-2.6-2.7-.9-1-1.7-2-2.5-3.1-.2-.2-.3-.4-.4-.6-.1-.1-.2-.3-.3-.4-.1-.2-.2-.4-.4-.5-.2-.3-.4-.7-.7-1-.1-.2-.2-.4-.4-.6 0-.1-.2-.3-.2-.4-.1-.2-.2-.4-.3-.5 0-.1-.2-.3-.2-.4 0 0 0-.1-.1-.2-.1-.2-.3-.5-.4-.7 0 0 0-.2-.1-.3v-.4c-.2-.4-.3-.7-.5-1.1 0-.2-.1-.3-.2-.4 0 0 0-.2-.1-.2 0-.2-.1-.3-.2-.5 0-.2-.2-.4-.3-.6v-.1c0-.2-.1-.3-.2-.5v-.1c0-.2-.1-.3-.2-.5v-.2c0-.2-.1-.3-.2-.5 0-.2-.1-.4-.2-.5v-.1c0-.1 0-.3-.1-.4 0-.1 0-.3-.1-.4 0-.2-.1-.4-.2-.5v-.3c0-.2 0-.3-.1-.5 0-.2-.1-.4-.2-.6s-.1-.4-.2-.6c0-.2-.1-.5-.2-.7 0-.4-.2-.7-.3-1.1-.2-.7-.3-1.3-.4-2 0-.2 0-.4-.1-.6v-.4c0-.2 0-.5-.1-.7v-.6c0-.5-.2-1.1-.3-1.6v-1.3c0-.4 0-.8-.1-1.1v-1.5c0-.5 0-1-.1-1.6v-14.4c0-.5 1.9-.8 4.6-1 4.3-.3 10.4-.3 14.1 0 5.4.6 10.6 1 15.7 1.3 4.7.3 9.3.5 13.8.7 16 .8 32.1 1.5 47.9-1 2.6-.4 5.3-.9 7.9-1.5 3.8-.9 7.6-2.1 11.3-3.4 3.6-1.4 7-2.9 10.2-4.8a54 54 0 0 0 7.8-5.4c1.5-1.2 2.9-2.6 4.2-3.9 7-7.4 9.6-17.2 8.8-26.6-.3-4.2-.3-8.3-2.6-12A847.13 847.13 0 0 1 420 361.3h.2Z"
                                      style="fill:url(#New_swatch_26311)"/>
                                <path d="m387.6 471.8-1.9 1.9c-12.2 11.6-27.4 20.5-43.9 27.3-5.3 1.4-10.7 2.6-16.2 3.8-140.1 19.4-183.9-5.2-194.4-10.2-9.1-4.3-15.7-9.1-20.5-14.5 21.2 8.6 43.9 14.5 67.1 17.2-5.5-1.7-10.9-3.4-16.4-5 16 1.7 32 3.4 48 5.2a83 83 0 0 1-39.9 3.3c18.6 4.1 38.2 4.9 57.2 2.4-4.8-.7-9.7-1.3-14.5-2 26.5-3.2 53.2-5.7 79.9-7.4-3.1 1.3-6.2 2.7-9.3 4 15.5.4 31.1-1.5 45.9-5.6-12.3 7.5-27.2 12-42.3 12.7 19.6-.1 39.1-6.1 54.3-16.6-12 2.1-24.3 2.9-36.6 2.4 28.4-3 56.3-9.2 82.7-18.5.3 0 .5-.2.8-.3Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient27)"/>
                                <path d="M114.5 477.6c30.4 10 63.3 14.3 95.7 12.6-2.4.5-14.8 1.2-17.2 1.7 19.5 1.9 38.4 4.7 58 4.2 19.6-.6 32.7-4.6 50.2-12.2-2.2 1.3 16.1 1.7 15.8 1.5 23.2-2.5 42.8-3.2 61.6-15.3-88.2 7.1-176.7 10.8-264.2 7.4Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient28)"/>
                                <path d="M411.6 449.4q-1.05 2.85-2.4 5.7a68 68 0 0 1-9.9 15.8l-6.1.9c-2.3.3-4.6.7-6.9 1l-3.8.6-2.2.3c-.3 0-.6 0-.9.1-2 .3-4 .4-5.9.9-2.4.6-4.7 1.2-7 1.8-.6.2-1.2.3-1.9.5s-1.5.4-2.2.5c-.7.2-1.3.3-2 .5-4.3 1-8.6 2-12.8 2.9-.7.1-1.3.3-2 .4-.4 0-.8.2-1.3.3-.5 0-.9.2-1.4.3l-1.6.3c-.5 0-1 .2-1.5.3l-1.7.3c-.5 0-1 .2-1.5.3-.9.2-1.7.3-2.6.5-.4 0-.9.2-1.3.3-.3 0-.6.1-.9.2-1.3.2-2.6.5-3.9.7-.5 0-.9.2-1.4.2-.8.1-1.7.3-2.5.4-.5 0-1.1.2-1.6.3-.2 0-.4 0-.7.1-.5 0-1 .2-1.4.2h-.3l-1.8.3c-.6 0-1.1.2-1.7.3-.3 0-.5 0-.8.1-.5 0-.9.1-1.4.2l-3.9.6c-1.8.3-3.5.5-5.3.7-.3 0-.7 0-1 .1-.4 0-.7 0-1.1.1l-2.6.3c-.4 0-.9.1-1.3.2-1.4.2-2.8.3-4.2.5-.6 0-1.3.2-1.9.2-2.1.2-4.1.5-6.2.7-.4 0-.9 0-1.3.1h-.3c-.6 0-1.2.1-1.8.2-.6 0-1.1.1-1.7.2-.4 0-.9 0-1.3.1-.4 0-.8 0-1.1.1-.6 0-1.1.1-1.7.2-.6 0-1.1.1-1.7.1s-1.1 0-1.7.1c-.5 0-1 0-1.5.1h-1.9c-.4 0-.9 0-1.3.1-.5 0-1 0-1.5.1-.6 0-1.2 0-1.8.1-.7 0-1.4 0-2.1.1-.7 0-1.3 0-2 .1-.7 0-1.3 0-2 .1l-5.9.3h-5.9q-9.15.45-18.3.3h-14.4c-1.6 0-3.1-.1-4.7-.2H207c-.7 0-1.5-.1-2.2-.2-.8 0-1.7-.1-2.5-.2-.7 0-1.4-.1-2.1-.2-.4 0-.9 0-1.3-.1-.5 0-.9 0-1.4-.1h-2.1c-1.1 0-2.2-.2-3.3-.3-.5 0-1.1-.1-1.6-.2-.5 0-1.1-.1-1.6-.2-.5 0-1-.1-1.5-.2-1.3-.1-2.6-.3-3.9-.4l-4.9-.6c-.3 0-.6 0-.9-.1h-.2c-1.7-.2-3.4-.4-5-.7-.4 0-.7 0-1.1-.1-.3 0-.6 0-.9-.1h-.5q-7.8-1.05-15.6-2.4l-2-.3-2-.3-2-.3h-.3c-1.9-.3-3.9-.7-5.8-1.1-.5 0-1-.2-1.5-.3-.7-.1-1.4-.3-2.1-.4-.6-.1-1.3-.2-1.9-.4-1.3-.2-2.6-.5-3.9-.8-.6-.1-1.3-.3-1.9-.4l-1.6-.3c-.2 0-.5 0-.7-.1-1.1-.2-2.3-.5-3.4-.7s-2.3-.5-3.4-.7c-1-.2-2-.4-3-.7-.7-.2-1.4-.3-2.1-.4-.4 0-.7-.2-1.1-.2-.7-.2-1.4-.3-2.1-.5l-2.5-.6c-1-.2-1.9-.4-2.9-.7-.2-.2-.3-.4-.4-.6-.1-.1-.2-.3-.3-.4-.1-.2-.2-.4-.4-.5-.2-.3-.4-.7-.7-1-.1-.2-.2-.4-.4-.6 0-.1-.2-.3-.2-.4-.1-.2-.2-.4-.3-.5 0-.1-.2-.3-.2-.4 0 0 0-.1-.1-.2-.1-.2-.3-.5-.4-.7 0 0 0-.2-.1-.3v-.4c-.2-.4-.3-.7-.5-1.1 0-.2-.1-.3-.2-.4 0 0 0-.2-.1-.2 0-.2-.1-.3-.2-.5 0-.2-.2-.4-.3-.6v-.1c0-.2-.1-.3-.2-.5v-.1c0-.2-.1-.3-.2-.5v-.2c0-.2-.1-.3-.2-.5 0-.2-.1-.4-.2-.5v-.1c0-.1 0-.3-.1-.4 0-.1 0-.3-.1-.4 0-.2-.1-.4-.2-.5v-.3c0-.2 0-.3-.1-.5 0-.2-.1-.4-.2-.6s-.1-.4-.2-.6c0-.2-.1-.5-.2-.7 0-.4-.2-.7-.3-1.1-.2-.7-.3-1.3-.4-2 0-.2 0-.4-.1-.6v-.4c0-.2 0-.5-.1-.7v-.6c0-.5-.2-1.1-.3-1.6v-1.3c0-.4 0-.8-.1-1.1V451c0-.5 0-1-.1-1.6V435c2.4-.1 4.9-.3 7.3-.4 3.8-.2 7.6-.4 11.4-.5 18.5-.8 36.9-1 55.4-1 10 0 19.9.2 29.9.5 20.4.5 40.8 1.4 61.2 2.6 18.5 1.1 37.1 2.4 55.6 3.9.5 0 1 0 1.5.1 1 0 2 .2 3 .2l14.8 1.2 20.4 1.8c10.7.9 21.4 1.9 32.1 2.9l6.2.6c.8 0 1.6.1 2.4.2.7 0 1.5.1 2.2.2 1.6.1 3.2.3 4.8.4 2.1.2 4.5.6 5.3 2.2Z"
                                      style="fill:url(#New_swatch_26312)"/>
                                <path d="M409.6 449.4c-2.1 7.3-8.7 15.8-16.4 22.4-2.3.3-4.6.7-6.9 1l-3.8.6-2.2.3c-.3 0-.6 0-.9.1-2 .3-4 .4-5.9.9a568 568 0 0 1-69.3 13.6c-.4 0-.7 0-1.1.1-18.1 2.4-36.3 3.9-54.9 4.7-46.8 2-95-5.7-140.2-16.1-.4-.5-.8-1-1.1-1.6-1.5-2.3-2.8-4.7-3.9-7.1 12.1 5.3 21.9 7.6 32.8 9-4.4-.8-22.8-8.9-23.2-9.1.5 0 36.6 6.2 55.3 4.8-3.6.8-5.9 3.4-9.6 4.1 18.6 4.2 46.4 6.3 65.6 5.1-8.3.1-33.5-3.3-41.1-6.3 22.4 3.9 89.4.7 108.1-2.2-1.5 2.1-27.6 6.9-29.1 9 12 1.8 24.8-2.3 36.7-4.6 9.5-2.7 19-5.3 28.5-8-10.2 0-20.3-.2-30.5-.3 22.8-2.7 45.3-7 67.3-13-6.6 2.3-13.2 4.7-19.7 7 2.9.8 7.1 1.4 10 2.2-3.5 3.1-18.8 5.2-22.2 8.3 22.4-3.8 60.8-17.3 77.6-25.1Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient29)"/>
                                <path d="m304.2 488.3 77.5-15.3c-.5.2-1 .5-1.5.7-.3 0-.6 0-.9.1-2 .3-4 .4-5.9.9a568 568 0 0 1-69.3 13.6Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient30)"/>
                                <path d="M305.6 485.7c-.8.9-1.6 1.8-2.5 2.7-18.1 2.4-36.3 3.9-54.9 4.7-46.8 2-95-5.7-140.2-16.1-.4-.5-.8-1-1.1-1.6 14.9 2.1 29.8 4.1 44.8 6.2 24.1 6.9 49.4 10.5 74.8 10.5-2.5-.5-4.9-1-7.4-1.6 28.9-.6 57.7-2.3 86.5-4.9Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient31)"/>
                                <path d="M272.3 466.2s-18.6-.2-42.9 1.8c-10.7.9-21.3 2.4-32 2.6-18.2.4-36.2-2.9-54-6.2h2.2c-3.2-.6-6.4-1.1-9.6-1.7 86.6 5.9 173-14.5 259.7-14.5-57.7 15.3-80.9 14.7-123.4 18"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient32)"/>
                                <path d="M411.6 449.4c-.6 1.5-2.5 5.7-2.5 5.7l.6.2s-3.4 5.5-5.1 8.2c-1.6 2.6-3.5 5.1-5.4 7.4-1 1.2-2.1 2.4-3.2 3.6-.4.4-.7.8-1.1 1.2-4.4-.9-8.9-1.5-13.4-1.8h-7.3c-3.5.1-6.9.4-10.3.9 6.1-2.4 10-3.9 13.8-5.2.2 0 .5-.2.7-.3 0-.4.2-.7.2-1.1 1.5-6.9 3.1-12.7 6.8-17.6 1.4-1.8 3.1-3.5 5.1-4.9 3.6-2.6 8.1-4.1 12.7-3.8 3.6.3 8.8 6.4 8.3 7.6Z"
                                      style="fill:url(#New_swatch_26313)"/>
                                <path d="M396.1 474.5c-.4.4-.7.8-1.1 1.2-4.4-.9-8.9-1.5-13.4-1.8 4.8-.9 9.9-.7 14.6.6Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient33)"/>
                                <path d="M419.5 428.3h.6c-3.5 15.4-8 20.1-9.7 24.3-.4.8-.7 1.7-1.1 2.5-4.9-1.9-9.6-3-13.6-3.6-5.6-.9-9.6-.9-10.2-.9-1.8 0-3.6 0-5.4.1 5.8-11.4 7-17.4 9.9-22.8.7-1.3 1.5-2.5 2.5-3.7 2.2-2.6 5-4.9 8.4-6 1.5-.5 3-.8 4.6-.8 4.2 0 9.9 1.9 13.5 3.8.6.3.5 7 .5 7Z"
                                      style="fill:url(#New_swatch_26314)"/>
                                <path d="M410.3 452.6c-.4.8-.7 1.7-1.1 2.5-4.9-1.9-9.6-3-13.6-3.6-1.1-.6-1.8-1.1-2.1-1.3 5.7 0 11.4.8 16.8 2.4"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient34)"/>
                                <path d="M426.4 389.3c-.8 3.5-2.1 10.6-2.1 10.6l3.1.4c-1.7 7.5-4.9 25.4-8 28.1-3.3-.7-8.4-1.6-11.8-2.1-3-.5-6-.9-9-1.3-2.1-.2-4.1-.5-6.2-.6a142 142 0 0 0-9.2-.6c10.8-13.3 14.6-21.2 20.4-26.7.5-.5 1.1-1 1.6-1.4s1-.8 1.5-1.1c5.5-3.9 12.9-6 19.7-5Z"
                                      style="fill:url(#New_swatch_26315)"/>
                                <path d="M419.5 428.3c-3.3-.7-8.4-1.6-11.8-2.1-1.3-.5-2.5-1.2-3.7-1.9 4.8 0 15.7 3.1 15.4 4Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient35)"/>
                                <path d="m429.7 374.5-3.3 14.8-2.1 9.2c-.1.7-.3 1.3-.4 2-2.9-.7-5.9-1.4-8.9-1.9-2.9-.5-5.8-1-8.8-1.4l-2.6-.3c-1.3-.1-2.7-.3-4-.4 1.6-6.9 4.6-12.3 8.8-16.2 2.7-2.6 5.9-4.5 9.4-5.8 3.7-1.3 8.1-1.9 11.6-.2.1 0 .3.1.4.2Z"
                                      style="fill:url(#New_swatch_26316)"/>
                                <path d="M424.4 398.5c-.1.7-.3 1.3-.4 2-2.9-.7-5.9-1.4-8.9-1.9-.8-.3-1.5-.6-1.9-.6 3.8-.3 7.6 0 11.3.5Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient36)"/>
                                <path d="M410.4 406.6c-2.1 9.4-4.6 16.3-6.9 24.3v.3c-1 3.3-1.9 6.7-2.7 10.6v.2c-.6 1.5-3.2 1-3.6 2.7-.3 0-.3.6-.2 1.4.2 1.3.6 3 .7 4.2v.6c0 .4 0 .7-.2.7-32.3 0-48.7 7.6-106.2 13.7-8.4.9-17.6 1.8-27.8 2.6-.8 0-1.5.1-2.3.2h-.8c-1.7.1-3.4.3-5.1.4h-3.5l-5.3.3h-7.9c-1.4 0-2.9 0-4.3.1h-26.4c-1.8 0-3.6-.1-5.5-.2h-1.2c-1.6 0-3.1-.1-4.7-.2h-8.8c-1.3 0-2.7-.2-4-.3h-2.3c-1.6-.1-3.1-.2-4.7-.4-.5 0-1.1 0-1.6-.1-.7 0-1.3-.1-2-.2h-.9c-1.9-.2-3.7-.3-5.6-.5-.9 0-1.8-.2-2.7-.3h-.2c-.7 0-1.3-.1-2-.2-.6 0-1.1-.1-1.7-.2-.4 0-.8 0-1.2-.1h-.9c-.6 0-1.2-.1-1.9-.2-3.1-.3-6.1-.7-9.2-1.1-.4 0-.8 0-1.1-.1-.4 0-.8-.1-1.2-.2h-.7c-1-.1-2.1-.3-3.1-.4-.6 0-1.1-.1-1.7-.2-2-.3-4-.5-6-.8-1.3-.2-2.6-.4-3.9-.5h-.3c-.7 0-1.4-.2-2.1-.3l-8.1-1.2c-1-.2-2-.3-3-.5l-15.4-2.4c0-.2 0-.4-.1-.6v-.4c0-.2 0-.5-.1-.7v-.6c0-.5-.2-1.1-.3-1.6v-1.3c0-.4 0-.8-.1-1.1v-1.5c0-.5 0-1-.1-1.6v-14.4c0-.5 1.9-.8 4.6-1 4.3-.3 10.4-.3 14.1 0 18.5-.8 36.9-1 55.4-1 10 0 19.9.2 29.9.5 3.8-.9 7.6-2.1 11.3-3.4 3.6-1.4 7-2.9 10.2-4.8a54 54 0 0 0 7.8-5.4l31.4-2.1c48.4-3.3 96.7-6.8 145.1-10.4.9 0 1.7-.1 2.6-.2Z"
                                      style="fill:url(#New_swatch_26317)"/>
                                <path d="M375.1 432.3q-11.7 1.8-23.4 4.2l22.6-2.4c-1.1 2.5-1 3.4-2.2 5.8-4.4.9-8.7 2.2-13.1 3.1.9.8 2.1 1.3 3.5 2.2-7.3 1.6-14.6 3.2-21.8 4.7 9.3-1.1 18.5-2.1 27.8-3.1-.8 1.6-1.6 3.2-2.4 4.9-17.9 8.4-20.6 31.2-38 40.4-12 6.4-27.3 4.4-41.2 2.3.1-7.7-1-15.4-3.4-22.8.4-2.3-4.2-2.9-5.7-1-.2-4.6-.4-9.2-.5-13.9 7-.4 13.9-.7 20.9-1.1-7-.5-14-1-21-1.6 0-2.3-.2-4.5-.3-6.8l14.4-4.5-14.6 1.5c-.4-10.8-.8-21.7-1.3-32.5 37.1-5.3 75.4-7.5 113.1-13.3-4.1 11.3-8.5 22.6-13.4 33.7Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient37)"/>
                                <path d="M242.4 437.1c23 0 46-1.4 68.7-4.5-.7.2 24-6.3 37.5-8.3l-2 .8c5.4.6 10.8 1.3 16.2 1.9 15.9.1 31.9.3 47.8.4-18.3-6.9-38.6-8.9-58.5-8.1s-39.5 4.3-59 8c-20.6 3.9-41.1 8.2-61.5 12.7l10.8-2.8Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient38)"/>
                                <path d="M403.5 430.9v.3c-1 3.3-1.9 6.7-2.7 10.6v.2c-.6 1.5-3.2 1-3.6 2.7-.3 0-.3.6-.2 1.4.2 1.3.6 3 .7 4.2v.6c0 .4 0 .7-.2.7-32.3 0-48.7 7.6-106.2 13.7a77 77 0 0 0-9.8.6c-6 .8-12 1.5-18.1 2-.8 0-1.5.1-2.3.2h-.8c-1.7.1-3.4.3-5.1.4h-3.5l-5.3.3h-41.7c-2.1 0-4.2-.2-6.2-.3H197c-1.2 0-2.4-.1-3.6-.2h-3c-1.3 0-2.6-.2-3.9-.2h-1.1c-2.5-.2-4.9-.3-7.4-.5h-1.2c-.6 0-1.3-.1-1.9-.2-.8 0-1.5-.1-2.3-.2h-.6c-1.9-.2-3.7-.3-5.6-.5-.9 0-1.8-.2-2.7-.3h-.2c-.7 0-1.3-.1-2-.2-2.5-.3-5-.5-7.5-.8-.6 0-1.3-.1-1.9-.2-.6 0-1.2-.1-1.8-.2-.7 0-1.4-.2-2-.2-.5 0-1-.1-1.5-.2-.4 0-.8 0-1.1-.1-.7 0-1.3-.2-2-.2-.4 0-.8 0-1.2-.1-.6 0-1.3-.2-1.9-.2s-1.1-.1-1.7-.2c-1.4-.2-2.7-.4-4.1-.5-.6 0-1.3-.2-1.9-.3-2.7-.4-5.5-.8-8.2-1.1-.5 0-1-.1-1.4-.2l-2.4-.3c-.5 0-1-.1-1.5-.2l-3.9-.6c-1.2-.2-2.4-.4-3.5-.5l-2.2-.3c-1.1-.2-2.2-.3-3.4-.5-2.1-.3-4.2-.7-6.2-1 0-.2 0-.4-.1-.6v-.4c0-.2 0-.5-.1-.7v-.6c0-.5-.2-1.1-.3-1.6v-1.3c0-.4 0-.8-.1-1.1v-1.5c0-.5 0-1-.1-1.6 22.1 5.8 27.4 8.2 50.4 7.4-14.9-2.2-24.1-5.4-31.3-7.5 5.6.2 38.1 1.7 43.7 1.1 14.9-1.6 58.7-4.4 75.2-4.4-8.1 2-49.2 4.2-61.2 6.1 19.9 3 36.9 3.6 41.4 3.8-5.6 1.4-21.6 3-23 3.5 37 4.4 59.1.6 89.8-4-19.9.1-39.9-1.4-59.5-4.6 13.8 0 27.6 0 41.5.1 17.3-5 35.1-8.6 53.1-10.7.8 0 1.6-.2 2.5-.3-.3.1-.7.3-1 .4-4.5 1.7-8.9 3.5-13.4 5.2 5.3-1.9 10.8-3.6 16.3-4.9 13.6-3.3 27.8-4.9 41.9-4.7-9.1 2-18.1 3.9-27.2 5.9-16 3.5-32.1 6.9-48.1 10.4 8.8 1.7 18 1.9 26.9.5 13.9-.5 27.8-2.3 41.3-5.3-5.6.3-11.1.6-16.7.8 5.6-1.5 11.3-3.1 16.9-4.6 9.8-2.7 19.5-5.3 29.3-8-4.1-2-9-2.7-13.6-2 9.6-1.8 19.5-2.4 29.3-1.8Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient39)"/>
                                <path d="m209.6 437 2 23.2 27.5-.8-1.1-25.1z"
                                      style="mix-blend-mode:multiply;fill:url(#New_swatch_26318)"/>
                                <path d="m235 478.5-23.7-.1.3-17.6v-.6l23.6-.8-1-.2z"
                                      style="fill:url(#New_swatch_26319)"/>
                                <path d="M236.9 467c-4.2 1.2-8.7 1.7-12.9.6-4.7-1.2-8.5-4-12.3-6.9v-.6l23.6-.7c.3.9.5 1.9.8 2.8.2.7.4 1.4.8 2v2.7Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient40)"/>
                                <path d="m236.8 459.2 1.1 19.7-2.9-.4-.7-20.5z" class="st608"/>
                                <path d="m211.3 478.4 3.3.9 25.8.7-2.9-1.3z" class="st412"/>
                                <path d="m239.1 457.3-23.9 2.1-.3-2.5-2.4-18.6 5.9-.2 5.4-.2 3.5-.2 5.5-.2 4.4-.1.5 5.9z"
                                      class="st593"/>
                                <path d="M225 448c0-2.2-.7-5.2-2.3-6.8-1.1-1.2-2.1-2.2-4.2-2.8h3.9c2.2-.2 4.1 1.2 4.3 3.1.2 2.1-.4 4.7-1.7 6.5"
                                      class="st13"/>
                                <path d="m239.1 457.3-24 2.1-1.6-1.3c.8-.1 4.4-2.3 8.2-3.8 6.9-2.8 5.9-14.9 5.5-16.5l5.5-.2c1.4 1.1 2.6 2.4 3.6 3.8.5.6.9 1.3 1.3 2l1.4 14Z"
                                      class="st156"/>
                                <path d="M223.5 448.6c0 1.6-.2 3.2-.7 4.6-1.3 3.8-4.5 6.5-8.3 6.6-3.4.1-6.5-1.8-8.4-4.8v-.1c-.9-1.6-1.5-3.5-1.6-5.5-.3-6 3.7-11 8.9-11.3 3.9-.2 7.4 2.3 9 6.1.6 1.3 1 2.8 1 4.4Z"
                                      class="st618"/>
                                <path d="M220.4 448.7c.2 4.6-2.6 8.4-6.4 8.5-3.5.1-6.5-2.8-7.1-6.8 0-.4-.1-.8-.1-1.1-.2-4.1 2.1-7.6 5.3-8.4.4 0 .8-.2 1.2-.2 3.8-.2 7 3.4 7.3 7.9Z"
                                      class="st596"/>
                                <path d="M220.4 448.7c.2 4.6-2.6 8.4-6.4 8.5-3.5.1-6.5-2.8-7.1-6.8.3.2.7.3 1.1.4 3.4 1 7.5-.7 9-3.6.7-1.4.8-3.3-.5-4.4-1.2-1-3.3-1-4.5-1.9.4 0 .8-.2 1.2-.2 3.8-.2 7 3.4 7.3 7.9Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient45)"/>
                                <path d="M222.8 453a20 20 0 0 0-.6-6.9c-.7-2.2-2.2-4.3-4.3-5.6a8.2 8.2 0 0 0-7.3-.7c-2.6 1.1-4.1 3.7-4.5 6.2-.4 2.6 0 5.2.4 7.7v.9c0 .1-.2.3-.3.4-1-1.6-1.6-3.5-1.7-5.6-.3-6 3.7-11 8.9-11.3s9.8 4.5 10.1 10.4c0 1.6-.2 3.2-.7 4.6v-.2Z"
                                      class="st68"/>
                                <path d="M223.5 448.6c0 1.6-.2 3.2-.7 4.6-1.3 3.8-4.5 6.5-8.3 6.6-3.4.1-6.5-1.8-8.4-4.8v-.1l.6.6c5.4 7.1 16.6 3.8 15.9-9.7 0-.5 0-1-.1-1.5.6 1.3 1 2.8 1 4.4Z"
                                      class="st179"/>
                                <path d="M236.4 512.1c-11.7.1-22.1-.1-31.5-.7-5.6-.3-10.9-.8-15.8-1.3-1.5-.2-2.9-.3-4.3-.5a263 263 0 0 1-18-2.9c-6-.5-11.9-1.4-17.6-2.9-8.3-2.1-16.3-5.4-23.2-9.7-5.1-3.2-9.7-7-13.4-11.4q-3.6-3.9-6.3-8.1c-6.3-10-9.2-21.6-8-33v-7.2c0-.5 1.9-.8 4.6-1l2.7.6 24 5.4c-2 .4-4 .7-5.9 1.1 1.6 5.5 5.4 11.2 7.6 14.1 4.5 6.3 5.1 5.3 13 7.7l2.1.3c-.4.1-.7.3-1 .5-.4.3-5.7-.5-6-.2 0 0 7.5 2.9 7.8 3.3 1.2 1.4 4.4 13.7 13.2 17.7 10.3 4.7 11.8-.7 22.1 4.1-2.3-.5-4.6-.9-6.9-1.4 2.2.9 4.4 1.7 6.6 2.6-1.5.2-2.9.3-4.4.5l-12.5 1.5 10.9 1.5c-2.8 1-5.6 1.9-8.4 2.9-3.7 1.3-7.4 2.5-11.1 3.8 7.3.3 14.6 1.1 21.8 2.1 10.7 1.6 21.3 3.9 31.6 7-1.7-.5-3.4-1.1-5.1-1.6 10.5 1.7 21.1 3.5 31.6 5.2Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient48)"/>
                                <path d="M170.8 465.3c22.5 2.4 45.1 3.8 67.6 4.1-46.2 1.4-92.8-4.1-138.5-11.5 0-.2 0-.4-.1-.6v-.4c17.5 2.7 23 1.3 34.4 3.7 10.9 3.3 23.1 4.1 36.7 4.8Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient49)"/>
                                <path d="m137.6 440.5 1.2 18.6 15.5-.7-1.5-18.9z"
                                      style="mix-blend-mode:multiply;fill:url(#New_swatch_26320)"/>
                                <path d="m154.9 473.9-16.3-.9.2-13.5v-.4l16.1-.6-.7-.1 1.8 4 .1 2.2z"
                                      style="fill:url(#New_swatch_26321)"/>
                                <path d="M156.1 464.6c-2.9.9-6 1.3-8.8.5-3.2-.9-5.8-3.2-8.4-5.5v-.5l15.4-.6c1.1 4.4 1.3 2.8 1.8 3.9z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient50)"/>
                                <path d="m157.5 458.8 1 16-5.3-.9v-15.5z" style="fill:url(#linear-gradient51)"/>
                                <path d="m138.6 473 2.2.8 17.7 1-3.8-1z" style="fill:url(#New_swatch_2691)"/>
                                <path d="m154.3 456.7-18 1.7-.2-1.5v-.5l-1.8-14.9 4.4-.1 4.1-.2 2.6-.1 7.4-.3.5 4.4v.4z"
                                      style="fill:url(#New_swatch_191)"/>
                                <path d="M143.7 449.4c0-1.8-.5-4.1-1.7-5.5-.9-.9-1.6-1.8-3.2-2.3h2.9c1.6-.2 3.1 1 3.2 2.5.2 1.7-.3 3.8-1.3 5.2Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient52)"/>
                                <path d="m154.3 456.7-18 1.7-1.2-1.1c.2 0 .6-.2 1.1-.5 1.2-.6 3.1-1.7 5.1-2.6 5.2-2.2 4.5-11.9 4.2-13.2l7.4-.3.4 4.4v.3l1.1 11.2Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient53)"/>
                                <path d="M142.5 449.7a9 9 0 0 1-.4 3.7c-.9 3-3.1 5.2-5.8 5.4-2.5.2-4.8-1.4-6.1-3.8-.7-1.3-1.2-2.8-1.3-4.4-.4-4.8 2.4-8.9 6.1-9.1 2.8-.2 5.3 1.8 6.6 4.8.5 1 .8 2.2.9 3.5Z"
                                      style="fill:url(#New_swatch_2611)"/>
                                <path d="M140.3 449.8c.3 3.6-1.7 6.7-4.4 6.9-2.5.2-4.7-2.2-5.3-5.4 0-.3 0-.6-.1-.9-.3-3.3 1.3-6.1 3.6-6.8.3 0 .5-.1.8-.2 2.7-.2 5.1 2.6 5.4 6.3Z"
                                      style="fill:url(#linear-gradient54)"/>
                                <path d="M140.3 449.8c.3 3.6-1.7 6.7-4.4 6.9-2.5.2-4.7-2.2-5.3-5.4.3.1.5.2.8.3 2.5.7 5.4-.6 6.4-3 .5-1.2.5-2.7-.4-3.5s-2.4-.8-3.3-1.5c.3 0 .5-.1.8-.2 2.7-.2 5.1 2.6 5.4 6.3Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient55)"/>
                                <path d="M142.2 453.2c0-1.9 0-3.8-.6-5.5-.6-1.8-1.7-3.4-3.2-4.4a5.3 5.3 0 0 0-5.3-.4c-1.8.9-2.8 3-3.1 5s.2 4.1.5 6.2v.7c0 .1-.1.2-.2.3-.7-1.3-1.2-2.8-1.4-4.5-.4-4.8 2.4-8.9 6.1-9.1 3.8-.2 7.1 3.4 7.5 8.2a9 9 0 0 1-.4 3.7v-.2Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient56)"/>
                                <path d="M142.5 449.7a9 9 0 0 1-.4 3.7c-.9 3-3.2 5.2-6.1 5.4-2.6.2-5-1.3-6.4-3.8.1.2.3.3.5.5 4.2 5.6 12.6 2.8 11.7-8 0-.4 0-.8-.1-1.2.5 1 .8 2.2.9 3.5Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient57)"/>
                                <path d="M270.2 465.7c17.7-4.2 37.1-3.1 55.4-4.8-14.7 2.3-25.9 3.7-40.5 5.1-7.1.6-17.7 1.6-24.8 2.2 3.3-.8 6.6-1.7 9.9-2.5"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient58)"/>
                                <path d="M397.6 451c0 .4 0 .7-.2.7-13.1 0-28.8 1.6-45.4 3.8 6.7-1.3 13.4-2.7 20.2-3.7 8.4-1.3 17-2 25.4-1.4z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient59)"/>
                                <path d="M415.5 370.4c-2 11.5-3.9 23.1-5.9 34.7-1.2 7.2-2.4 14.4-3.7 21.6-15.4-2.2-30.9-2.3-46.4-1.4-24.7 1.5-49.5 5.7-74.2 8.7-1.3.2-2.6.3-3.9.5A651 651 0 0 1 213 439q-10.95.15-21.9 0c7.4-1.4 15.3-4.4 22.6-8.3 14.2-7.5 23.8-31.7 29-45.3 2.7-7 6.3-1.9 12.3-7.2 5.1-4.5 12.7-6.1 19.9-7.4 5.9-1 11.8-2 17.7-2.8 29.9-4.3 60.3-6.2 90.6-5.8 8 .1 16.1.4 24.1.8 2.9.2 6.4.6 7.8 2.8.9 1.4.7 3.2.4 4.8Z"
                                      class="st589"/>
                                <path d="M363 392.6c-25.7 1.4-60.4 6.2-85.2 12.3 24-3.6 57.6-5.8 81.9-4.7 16.9 0 33.9.7 50.7 1.9-2.8-.5-3.6-3.7-5.7-5.2-1.5-1.1-3.5-1.4-5.5-1.6-17.6-2.1-35.6-2.3-53.3-.5l17-2.1Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient61)"/>
                                <path d="M409.6 405c-1.2 7.2-2.4 14.4-3.7 21.6a206 206 0 0 0-30.4-1.9c-31.3.2-62.8 6-94.1 9.7a651 651 0 0 1-68.4 4.5c-.3-.7-.8-1.4-1.6-2.1-.4-.4-.8-.8-1.3-1.2 29.9-2.5 67-8.9 95.3-17.5-.8-.5-9.1-.2-9.8-.7 3-.9 6-1.8 9-2.6-15.4 1.2-30.9 2.5-46.3 3.7 35.6-8.3 72.6-11 109.3-13.7-20.9 4-42.1 8-61.4 15.9 17.5-.3 35-1.5 52.3-3.7 2-1 3.9-1.9 5.9-2.9-2.2-1.2-4.9-1.8-7.5-1.7 17.3-3.8 34.9-6.3 52.7-7.4"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient62)"/>
                                <path d="M383.2 362c-2 4.9-3.8 9.8-5.5 14.8-.5 1.5-.9 2.9-1.4 4.4-2.1 6.9-3.8 13.8-5.1 20.8a17.3 17.3 0 0 1-10.6 7.5c1.7.1 3.5.3 5.2.4q-2.85 7.65-6.3 15.3-3.75 8.25-8.1 16.2l-3.5-3.8c-20 6.8-42.8 7.2-63.1 1 .2-1.6.3-3.2.5-4.7.3-2.7.5-5.5.7-8.2 2.1-.2 4.2-.5 6.2-.7-3.6-2.3-5.7-6.3-5.1-10.2l14.7-3.6h-2.7.5c-4.3 0-8.7.2-13 .5v-.5c.1-4.9.1-9.9 0-14.8V394c0-2.6-.2-5.2-.3-7.8V385q-.3-5.7-.9-11.4c0-.6-.1-1.2-.2-1.9.1.6.2 1.2.4 1.8.1.6.3 1.3.4 1.9l2.3-2.6 4.4-5.1c24.2-3.4 48.6-5.4 73.1-5.8 5.8 0 11.7-.1 17.5 0Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient63)"/>
                                <path d="M375.5 424.7c-31.3.2-62.8 6-94.1 9.7-22.7 2.7-75.5 4.7-98.4 5-.3-.7 29.2-1.9 28.5-2.6 14.2-1.5 28.5-2.7 42.8-3.6 24.1 2.5 48.4-2 72.3-5.4 16.1-2.3 32.7-4.1 48.9-3.1"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient64)"/>
                                <path d="M404.4 370.6c-.3 2.8-.7 5.5-1 8.2v.3c0 .6-.2 1.3-.2 1.9-.2 1.4-.3 2.8-.5 4.3-.5 3.8-.9 7.6-1.4 11.4v.7l-6.4-.3c-9.7-.4-19.4-.5-28.9-.3-30.4.5-60.3 3.7-90.4 8.8-12.4 2.1-24.9 4.5-37.4 7.2-2.1.5-4.4.6-6.6.9-.6 0-1.2.2-1.8.2.5-.4 1-.7 1.5-1.1 4.2-3 7.5-5.6 10.1-8.2 2.5-2.5-2.4-22.7-1.1-25.2 2-3.9 9.6 9.7 9.8 4.7 8.4-3 16.9-5.6 25.6-8a409 409 0 0 1 120.2-14.3c2.7 0 5.7.3 7.5 2.1s1.6 4.4 1.3 6.7Z"
                                      style="fill:url(#New_swatch_26322)"/>
                                <path d="M403.1 381.3c-12.1.9-24.3 1.9-36.4 2.8 12-.4 24 .1 35.9 1.5l-1.5 12.1c-58-3.4-101.6 3-169.8 16.2-.6.1-1.2.2-1.8.2.5-.4 1-.7 1.5-1.1 4.2-3 7.5-5.6 10.1-8.2 30-6.9 60.5-12.3 91.3-16.2-13.6.2-27.2.3-40.7.5 29.3-3.5 58.6-6.9 87.9-10.4 7.9-.9 16.4-1.8 23.8.6 1.3.4 2.7 1 3.9 1.6l-4.1.3Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient65)"/>
                                <path d="M383.2 362c-3.3 4.1-6.7 8.2-10 12.3 1.8.4 3.4 1.3 4.6 2.5.3.4.6.7.8 1.1-.7 1.1-1.5 2.2-2.2 3.2-3.5 5.2-7.1 10.4-10.6 15.6-1.8 2.6-3.5 5.2-5.3 7.7l-15.6 5.4-43 1.2h-2.7.5l4.8-.6c-5.9.2-11.9.4-17.8.5l-11.4.3v-11.4c3.8-1.1 7.6-2.4 11.4-3.7v-2.4l-11.3.6v-4.2c3.6-1.4 7.3-2.9 10.9-4.3v-1.2c-3.6.2-7.2.5-10.9.7v-9.5c3.3-.9 6.6-1.8 10-2.6h.2c.9-.2 1.8-.4 2.6-.6a403 403 0 0 1 77.5-10.8c5.9-.3 11.9-.4 17.8-.4-.1.1-.2.3-.3.4Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient66)"/>
                                <path d="M403 396.9h-1.8c-2.2 0-4.3.2-6.5.3-53.2-2.1-101.4 4.5-156.7 15.7l-3.9-2.2c42.1-5.5 82.4-14.6 102.3-17.3 20.4.3 44.5 2.9 64.9 3.3h1.8Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient67)"/>
                                <path d="M263.4 436.3"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient68)"/>
                                <path d="M248.8 407.4c-1.7.6-3.3 2.4-5 3 1.2.7 2.9.1 4.7.6-.5 12.3 1.8 24.9 1.5 25.5s-3.2.4-4.7.7c1.1.3 4.6.7 5.7.9-.4 4.1 2.5 22.6 6.1 30.1-.9.6-3.1.4-4.6.6 1.1.3 4.1.5 5.2.9 3 14.1 13.8 22.1 13.8 22.1s-6.2.1-6.1.2l6.5.6c6.5 7.1 11.6 12.4 21.2 16.1-5.6.6-7.3.7-12.5 1.2-2.1-1.7-4.1-3.6-5.9-5.5-3.8-3.9-8.8-6.2-11.9-10.5-3.7-4.9-8.6-6.4-11.5-11.8-1.4-2.6-.8-8.1-1.9-10.8-1.4-3.1-1.3-8.7-2.3-11.9-.8-2.3-1.4-4.5-2-6.8-.2-.9-.5-1.8-.7-2.6-1-4.3-1.8-8.6-2.2-12.9-4.3 1.2-3.8-3.6-7.8-2.8-17.1 3.6-40.8 4.4-61.4 5.3-1.6 6.6 2.3 27.9 2.3 27.9-.9 0-2 0-3.2-.1.3.5 1.3 2 3.9 2.4-.2 3.8 4.1 16.1 5.3 18.5-1 .5-1.6.4-2.6.9 1.3.2 2.3.5 3.7.7 0 .1 4.5 11.3 23 21.5-5.6-.3-10.9-.8-15.8-1.3-8.6-5.2-15-12.9-19.2-21.4-.9-1.7-1.6-3.5-2.3-5.2-.6-1.6-1.2-3.2-1.6-4.8l-1.2-4.4c0-.3-.2-.7-.2-1-.5-2.2-.9-4.5-1.3-6.7 0-.5-.2-1.1-.2-1.6-.7-5.1-1.1-10.2-1.4-15.3-.1-1.9.2-8.3.1-10.2-27.3 2.8-63.3 1-63.3.9s-.4.9-.4-1.4c7.3-2 20-3.3 34.4-4.3 12.6-.9 26.6-1.6 39.7-2.2 16.6-.9 31.8-1.7 41.2-3 6.2-.8 9.8-1.9 9.6-3.2.2-.5.4-1 .6-1.6 5.8-15.4 10.8-30.4 20.4-39.4 8.8-8.2 21.8-10.8 36.7-15.2 24.6-7.4 59.3-10.7 110.5-13.6 8.9-.5 18.6.9 26.5 4.5h.1c5.2 2.4 9.7 5.7 12.7 10-4.9.1-13.2-2.2-18.9-2.2-86.8-.6-160.6 18.4-160.6 18.4 0 .3-2.8 16.4-2.3 20.2Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient69)"/>
                                <path d="M196.3 512c1.8.2 4.3-.4 6.1-.8A52 52 0 0 1 172 479c-4.5-13.9-4.1-28.5-3.8-42.8l-6.2-.6c-.9 14.5-1.8 29.3 2.4 43.3s13.6 31.5 31.8 33.1Z"
                                      style="fill:url(#New_swatch_2779)"/>
                                <path d="M196.3 512c1.8.2 4.3-.4 6.1-.8A52 52 0 0 1 172 479c-4.5-13.9-4.1-28.5-3.8-42.8l-6.2-.6c-.9 14.5-1.8 29.3 2.4 43.3s13.6 31.5 31.8 33.1Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient70)"/>
                                <path d="M197 512c-5.3.1-10.2-.4-13.9-1.7-4.4-1.5-21.3-6.2-27.7-43-.4-2.4-.8-5-1.1-7.8-.3-2.7-.6-5.6-.8-8.7-.3-4.9-.5-10.2-.5-16 3.6.2 8.1-.8 11.7-.6-.4 7.7-.4 14.4-.2 20.4.2 4.7.6 8.9 1.1 12.7.2 1.8.5 3.4.8 5 2.1 11.1 5.7 18.4 9.6 24.3 4.7 6.9 12.1 13.2 21.1 15.3Z"
                                      style="fill:url(#New_swatch_27710)"/>
                                <path d="M151.3 438.8c6.4-.4 12.7-.7 19.1-1.2-6.8 1.6-13.7 2.1-19.1 1.2"
                                      style="fill:url(#New_swatch_27711)"/>
                                <path d="M410.7 349.6c-.7 3.7-1.1 5.8-1.6 7.9-.5 2.4-1 4.6-1.8 8.8-11.4-3.8-76.6-5-163.8 18.4a8.6 8.6 0 0 0-4.6 3.1c-2.4 3.2-3.2 7.8-6.6 10.7.8-4.4.3-10.4.7-15.4.3-3.7 1.2-6.9 3.6-8.6 1-.3 2-.5 3.1-.8.2 0 .4 0 .6-.1.3 0 .5-.1.8-.2 75.7-19.2 113.9-27.1 169.6-23.8"
                                      style="fill:url(#New_swatch_27712)"/>
                                <path d="M241.1 373.4c-.5 2.8-1 5.5-1.3 8.2-.3 2.1-.6 4.2-.8 6.3l-.6 5.3c-1.8 17.9-1.2 31.3-1.2 31.3-.9 3.3-4.5 5.9-11.5 7.9-18.5 5.4-60.5 7.1-136.9 7.1-.3-2.2-.3-3.1-.4-4.5 0-.6-.1-1.3-.2-2.3 45.8-1.9 118.7-4.5 133.2-12.1 5.7-3 1.3-14.7 3.7-35.4 0-.5.1-1 .2-1.5.3-2 .6-4 1-6.1 0 0 3.7-1.2 10.5-3 1-.3 2-.5 3.1-.8.2 0 .4 0 .6-.1.3 0 .5-.1.8-.2Z"
                                      style="fill:url(#New_swatch_27713)"/>
                                <path d="M410.7 349.6c-.7 3.7-1.1 5.8-1.6 7.9-56.5-3.8-114 4-166.4 22.4-.5-1.2-1-2.5-1.5-3.7l-.6 5.1c-.3 0-.6.1-.8.2-2.2.5-4.5 1.1-6.8 1.6-2.7.6-5.3 1.3-8 1.9.3-2.4.6-4.9 1.1-7.5 0 0 3.7-1.2 10.5-3 1-.3 2-.5 3.1-.8.2 0 .4 0 .6-.1.3 0 .5-.1.8-.2 75.7-19.2 113.9-27.1 169.6-23.8"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient71)"/>
                                <path d="M239.3 385.2c57.9-15.5 124.9-26.2 173.6-21-1.4 1.5-5.4 2.2-6.8 3.7-35.8-6.7-110.3 5.1-161.5 18.8-2.9.8-3 1.4-5.2-1.4Z"
                                      style="fill:url(#New_swatch_27714)"/>
                                <path d="M239.3 385.2c57.9-15.5 124.9-26.2 173.6-21-1.4 1.5-5.4 2.2-6.8 3.7-35.8-6.7-110.3 5.1-161.5 18.8-2.6.7-3 1.4-5.2-1.4Z"
                                      style="mix-blend-mode:multiply;opacity:.5;fill:url(#New_swatch_27715)"/>
                                <path d="M239.3 385c1.9.2 4 1.3 5.3 1.6-3.2 26.8-2.8 66.7 11.8 94 6.2 11.6 19.8 23.1 33.4 28.4-1.7.8-3 1.2-3 1.2s-16.3-2.1-21.2-6.3c-6.2-5.2-18-15.3-20.9-22.3-12.8-31-8.4-70.7-5.3-96.6Z"
                                      style="fill:url(#New_swatch_27716)"/>
                                <path d="M239.3 385c1.9.2 4 1.3 5.3 1.6-3.2 26.8-2.8 66.7 11.8 94 6.2 11.6 19.8 23.1 33.4 28.4-1.7.8-3 1.2-3 1.2s-16.3-2.1-21.2-6.3c-6.2-5.2-18-15.3-20.9-22.3-12.8-31-7-82.2-5.3-96.6Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient72)"/>
                                <path d="M286.7 510.3c-8.2 1.3-10.5 2.4-18.6.5-13.3-6.5-22.3-15.9-28.8-27.6-1.9-3.5-3.6-7.2-5.1-11-1-2.6-1.9-5.3-2.7-8-1.9-6.5-3.3-13.1-4.3-19.7-2.1-13.7-2.5-26.9-2.5-37.2 5.4-2.1 11.1-19.3 13.7-14.8.3.5-2.6 29.3 2.6 57 1.1 5.7 2.4 11.3 4.3 16.6 1.1 3.3 2.4 6.5 3.9 9.5 1.5 3.1 3.2 6 5.2 8.7 7.4 10.1 24.2 23.9 32.5 25.8Z"
                                      style="fill:url(#New_swatch_27717)"/>
                                <path d="M334.5 503.3c13.4-.3 26.1-5.7 36.1-13.3s17.8-17.2 24.1-27.4c10.4-17 17.9-39.2 25.6-63.4 2.9-2.5 5.8-4.9 8.7-7.4a64 64 0 0 0-1.2-17.5l-16.9 16.3c.6 5.4-1.4 10.8-3.4 15.9-7.8 19.7-17.2 39-28.2 57.5-4.4 7.4-9.1 14.8-15.4 21.2s-14.3 11.7-29.4 18Z"
                                      style="fill:url(#New_swatch_26420)"/>
                                <path d="M418.4 392.8c-4.9 19.1-11.3 37.9-18.9 56.3-3.9 9.4-15.2 34.1-38.7 45.1-10.9 5.1-19.9 8.5-36.3 10.5 19.6-9.7 40-20 52.5-36.2 6.8-8.9 10.9-19.2 14.3-29.5 5.9-17.8 10-36 12.3-54.4 3.7 4.1 9.5 6.8 14.9 8.1Z"
                                      style="fill:url(#New_swatch_27718)"/>
                                <path d="M418.4 392.8c-4.9 19.1-11.3 37.9-18.9 56.3-3.9 9.4-15.2 34.1-38.7 45.1-10.9 5.1-19.9 8.5-36.3 10.5 19.6-9.7 40-20 52.5-36.2 6.8-8.9 10.9-19.2 14.3-29.5 5.9-17.8 10-36 12.3-54.4 3.7 4.1 9.5 6.8 14.9 8.1Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient73)"/>
                                <path d="m405.2 398.2 11.4 1.1 12.1-7.4c-4.8-2.4-14.1-6.1-14.1-6.1l-9.4 12.5Z"
                                      style="fill:url(#New_swatch_27719)"/>
                                <path d="m405.2 398.2 11.4 1.1 12.1-7.4c-4.8-2.4-14.1-6.1-14.1-6.1l-9.4 12.5Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient74)"/>
                                <path d="M495.6 263.1c-.2.2-.4.4-.5.7q-29.4 37.05-56.7 75.3c-3.3 4.6-6.6 9.3-10.8 13.3-.8.8-1.7 1.6-2.6 2.3-2.5 2-6.9 3.5-11.1 4.2-1.5.2-3 .4-4.3.5-3.6.1-6.5-.4-7.4-1.9 1-.9-2.5-6.5-1.5-7.5 23.5-22.3 64.9-61.6 91.9-90.4.5.5 1 1.1 1.5 1.6.6.7 1.2 1.3 1.8 2Z"
                                      style="fill:url(#New_swatch_27720)"/>
                                <path d="M426.6 351.9c3.4 2.2 6.1 1.4 9.7 1.2 20.2-31.3 38.3-59.2 61.1-89.1l-3.9-.3s-37.8 48.1-66.9 88.3Z"
                                      style="fill:url(#New_swatch_27721)"/>
                                <path d="M473.6 279.3c5.1-1.3 10.3-2.4 15.5-3.2.4-.4.5-1.3.3-1.7-7.6 2.4-11.2 2.5-14.9 3.6s-1.5 1.5-.9 1.3"
                                      style="fill:url(#New_swatch_26421)"/>
                                <path d="M426.7 351.6c2.9 0 9.6 1.5 9.6 1.5s-4.9 24.9-7.5 38.8c-3.4-.9-7.1-.3-10.5-1.2 2.9-12.7 5.4-26.6 8.4-39Z"
                                      style="fill:url(#New_swatch_27722)"/>
                                <path d="M426.7 351.6v.6c-.6 6.3-1.8 13.8-3.2 20.9a289.44 289.44 0 0 1-3.5 17c-.3 1.1-5.7 4.6-11 8.3-2.2 8-4.5 15.8-7 23.6-3 9.5-6.4 18.9-10 28.2 0 .1-.1.3-.2.4-3.1 8-6.6 15.9-12.1 22.9-7.7 9.9-19.1 17.3-31.4 22.8a126 126 0 0 1-33.2 9.6l-4.8.6c1.9-.5 3.9-1 5.7-1.5 14.9-4.1 27.6-10 39.3-19.1 5.6-4.4 10.5-9.3 14.8-14.7 8.8-11.2 14.8-24.1 18.7-37.4 0-.3.2-.5.2-.8s.2-.6.3-.9c1-3.4 1.8-6.8 2.5-10.2 5-23.8 5-48.2 8.6-72.2 6.2 3.3 7.6 5.8 26.2 1.7Z"
                                      style="fill:url(#New_swatch_27723)"/>
                                <path d="m497.4 263.9-2.4-.1-1.6-.1-.4-1.6-.7-2.6 2.1.9 1.2.6z"
                                      style="fill:url(#New_swatch_27724)"/>
                                <path d="M226.2 431.4c4.5-3 7.5-6.1 9.3-10.8 1.7-4.7 1.6-9.8 2-14.8.2 4.8-.3 11.5-1.7 16.3s-3.4 6.6-9.5 9.3Z"
                                      style="fill:url(#New_swatch_27725)"/>
                                <path d="M318 451.7c-.3 0-.7.1-1 .2-1.6 0-3.2.1-4.8.1z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient75)"/>
                                <path d="M412.8 398h.3z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient76)"/>
                                <path d="M245.2 466.2c-4.6-.5-9.1-1.2-13.7-2-1.9-6.5-3.3-13.1-4.3-19.7 4.6 1.7 9.2 3.3 13.8 5 1.1 5.7 2.4 11.3 4.3 16.6Z"
                                      class="st115"/>
                                <path d="M286.7 510.3c-8.2 1.3-10.5 2.4-18.6.5-13.3-6.5-22.3-15.9-28.8-27.6-1.9-3.5-3.6-7.2-5.1-11 .7.2 1.4.3 2.1.5l12.7 3c1.5 3.1 3.2 6 5.2 8.7 7.4 10.1 24.2 23.9 32.5 25.8Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient78)"/>
                                <path d="M165.5 467.4c-3.8-2.6-7.5-5.3-11.3-7.9-.3-2.7-.6-5.6-.8-8.7 3.7 1.3 7.3 2.6 11 3.9.2 4.7.6 8.9 1.1 12.7"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient79);opacity:.6"/>
                                <path d="M197 512c-5.3.1-10.2-.4-13.9-1.7-4.4-1.5-21.3-6.2-27.7-43 3.7 1.7 7.3 3.4 11 5.2 2.1 11.1 5.7 18.4 9.6 24.3 4.7 6.9 12.1 13.2 21.1 15.3Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient80)"/>
                                <path d="M391.8 450.9c-3.1 8-6.6 15.9-12.1 22.9-7.7 9.9-19.1 17.3-31.4 22.8a126 126 0 0 1-33.2 9.6l.9-.9c14.9-4.1 27.6-10 39.3-19.1 5.6-4.4 10.5-9.3 14.8-14.7 8.8-5.5 16.2-12.5 21.7-20.6"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient81)"/>
                                <path d="M423.4 373.2c-1.2 6.4-2.5 12.5-3.5 17-.3 1.1-5.7 4.6-11 8.3-2.2 8-4.5 15.8-7 23.6-6.2 9.4-11.8 16.9-16.1 20.8.2-.6 2.2-6.2 2.3-6.8 9.1-17.5 19.1-43.7 19.1-43.7s12.5-10.4 16.2-19.3Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient82)"/>
                                <path d="M290 384.6c-1.2.5-2.4.9-3.6 1.4v-1.2c1.2 0 2.5-.2 3.7-.3Z"
                                      style="fill:url(#linear-gradient83)"/>
                                <path d="M294.3 393.5c-2.5 1-5 1.9-7.6 2.8v-2.4c2.5-.1 5.1-.3 7.6-.4"
                                      style="fill:url(#linear-gradient84)"/>
                                <path d="M302 411.1h-2.9 2.8Z" style="fill:url(#linear-gradient85)"/>
                                <path d="M426.7 351.6v.6c-.6 6.3-1.8 13.8-3.2 20.9-.3 1.7-.6 3.3-.9 4.9-3.6 5.8-8 11.2-13.6 15.7a8.3 8.3 0 0 1-2.6-6.9c-1.5 10.4-12 39.3-17.1 46.3 0-.3.2-.6.3-.9 1-3.4 1.8-6.8 2.5-10.2 5-23.8 5-48.2 8.6-72.2 6.2 3.3 7.6 5.8 26.2 1.7Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient86)"/>
                                <path d="M130.7 381.7c.2 3.6.5 6.5.8 8.7a32 32 0 0 1-3.6-8.2c0-.2 0-.4-.1-.5-1.8.2-3.6.4-5.4.7-5.5.9-10.9 2.3-16.3 3.7 5.2-2.1 10.7-3.8 16.2-5 1.7-.4 3.5-.8 5.2-1.1-.2-1.2-.4-2.4-.7-3.7-1.6.2-3.1.4-4.7.7-12.3 2.4-23.6 8.5-35.9 10.5 0-.9 0-1.8.1-2.8 15.6-3 24.8-9 43.9-12 .1 3.2.2 6.2.4 8.8v.2Zm-3.2-1.7v-.1c-.3 0-.6.1-.9.2h.9Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient87)"/>
                                <path d="M229.9 421.2q-2.25 1.5-4.8 2.7c-6.9 3.5-14.8 5.7-22.8 6.5 0-.7-.2-1.5-.2-2.2-.6 1-1.3 2-1.9 3l-51.2 3.6c-.2-.7-.4-1.4-.5-2.2l-1.2 2q-29.4 1.8-58.8.3c0-.6-.1-1.3-.2-2.3 45.8-1.9 118.7-4.5 133.2-12.1 5.7-3 1.3-14.7 3.7-35.4 0-.5.1-1 .2-1.5 0 22.3 1.7 23.9 1.7 32.1 0 5.5.4 3.2 3 5.5Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient88)"/>
                                <path d="m169.4 439.2 1.4 21.1 19-.7L188 438z"
                                      style="mix-blend-mode:multiply;fill:url(#New_swatch_26323)"/>
                                <path d="m188.1 466.6-1.4 10.6-18.6-1 .3-15.3v-.6l17.6-.6 2 4.4z"
                                      style="fill:url(#New_swatch_26324)"/>
                                <path d="M188.1 466.6c-3.3 1.1-6.8 1.5-10.1.5-3.7-1.1-6.6-3.7-9.6-6.3v-.5l17.5-.7c1.2 5 1.5 3.2 2.1 4.4v2.5Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient89)"/>
                                <path d="m189.7 460 1.1 18.3-4.3-1.1-.6-17.6z"
                                      style="fill:url(#linear-gradient90)"/>
                                <path d="m168.1 476.2 2.6.9 20.1 1.2-4.3-1.1z" style="fill:url(#New_swatch_2692)"/>
                                <path d="m189.8 457.7-20.6 1.9-.2-1.7-.1-.6-1.9-16-.1-1h1.7l3.4-.2 4.6-.1 3-.2 4.7-.1 3.7-.2.5 5.3.1.1z"
                                      style="fill:url(#New_swatch_192)"/>
                                <path d="M177.6 449.3c0-2-.6-4.7-2-6.2-1-1.1-1.8-2.1-3.6-2.6h3.3a3.3 3.3 0 0 1 3.7 2.8c.2 1.9-.4 4.3-1.4 6"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient91)"/>
                                <path d="m189.8 457.7-20.6 1.9-1.4-1.2c.2 0 .6-.2 1.2-.5 1.3-.7 3.5-2 5.8-3 5.9-2.5 5.1-13.6 4.7-15.1l4.8-.2h3.7l.5 5.2 1.2 12.8Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient92)"/>
                                <path d="M176.3 449.6c.1 1.5 0 2.9-.4 4.2-1 3.5-3.7 6-6.9 6.2-2.9.2-5.7-1.5-7.3-4.3-.8-1.4-1.4-3.1-1.5-5-.4-5.5 2.9-10.1 7.4-10.4 3.3-.2 6.4 2 7.9 5.4.5 1.2.9 2.5 1 4Z"
                                      style="fill:url(#New_swatch_2612)"/>
                                <path d="M173.6 449.8c.3 4.1-2 7.7-5.3 7.9-3 .2-5.6-2.5-6.3-6.1 0-.3-.1-.7-.1-1-.3-3.7 1.6-6.9 4.3-7.7.3 0 .7-.2 1-.2 3.2-.2 6.1 3 6.4 7.1"
                                      style="fill:url(#linear-gradient93)"/>
                                <path d="M173.6 449.8c.3 4.1-2 7.7-5.3 7.9-3 .2-5.6-2.5-6.3-6.1.3.1.6.3.9.4 3 .8 6.4-.7 7.6-3.4.6-1.3.6-3.1-.5-4s-2.8-.9-3.9-1.7c.3 0 .7-.2 1-.2 3.2-.2 6.1 3 6.4 7.1Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient94)"/>
                                <path d="M175.9 453.7c0-2.1 0-4.3-.7-6.3s-2-3.9-3.9-5.1a7 7 0 0 0-6.3-.5c-2.2 1.1-3.4 3.4-3.7 5.8s.2 4.7.6 7.1v.8c0 .1-.1.3-.3.3-.9-1.5-1.5-3.2-1.6-5.1-.4-5.5 2.9-10.1 7.4-10.4s8.5 3.9 8.9 9.4c.1 1.5 0 2.9-.4 4.2z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient95)"/>
                                <path d="M176.3 449.6c.1 1.5 0 2.9-.4 4.2-1 3.5-3.7 6-6.9 6.2-2.9.2-5.7-1.5-7.3-4.3.2.2.4.3.5.5 4.8 6.4 14.4 3.2 13.3-9.1 0-.5 0-.9-.1-1.4.5 1.2.9 2.5 1 4Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient96)"/>
                                <path d="M88.8 177.2c4.5 11.3 9.8 22.3 15.9 32.8.1-5.8-1.8-11.4-4.7-16.4s-6.6-9.4-10.3-13.8c.7 1.1 2.9.4 2.8-1-.1-1.3-2.3-1.7-2.9-.5 12.4 8.2 27.7 12 42.6 10.7-14.2-3.4-28.4-6.8-43.4-11.8"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient97)"/>
                                <path d="M101.7 187.4c8.6 9 21.8 17 33.9 12.7-10.7-2.6-21-7-33.9-12.7"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient98)"/>
                                <path d="M476 275.3c4.2-.8 8-1.7 12.3-1.4 1.6.1 3.6-.6 3.6-2.5-4.6 1.9-14.4 1.9-14.4 1.9s-2.2 1.7-1.5 2"
                                      style="fill:url(#New_swatch_26422)"/>
                                <path d="M161.5 76.7c-1.9.9-3.9 1.4-5.9 1.7-9 .9-21-4.9-30.3-1.8-6.7-2.1-13.3-5.3-13.3-11.8 1.3 1.7 4.5 1.8 8.2 1.2 5.3-.8 11.7-3 15.6-4.3 1.8-.6 3.8-1.4 4.8-3 0-.1.2-.3.2-.4v-.1c1.1-2.5-.5-5.4-2.2-7.6-1.7-2.3-5.5-5.5-2.6-7.7 0 0 12-2.1 14.5 1.9 3.1 4.8 3.4 10.8 4.1 16.5s12.7 11.6 6.6 15.4Z"
                                      class="st476"/>
                                <path d="M161.5 76.7c-1.9.9-3.9 1.4-5.9 1.7 0-.3.1-.6.1-1 0-2.7-2.2-4.8-4.4-6.3s-4.8-2.9-5.9-5.3c-.5-1.1-.7-2.4-1.1-3.5-.7-1.6-2-2.8-3.3-4 1.1-2.5-.5-5.4-2.2-7.6-1.7-2.3-5.5-5.5-2.6-7.7 0 0 12-2.1 14.5 1.9 3.1 4.8 3.4 10.8 4.1 16.5s12.7 11.6 6.6 15.4Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient99)"/>
                                <path d="M198.6 60.4c-1.8-.2-3.6-.4-5.4-.5a75 75 0 0 0-34 6.3c-1.4.6-2.7 2.3-2.7 2.3s-5.9-4.3-7.5-12.5c-1.1-5.8-10.2-6.5-12.7-13.2l1.9-1.3c7.1-4.7 14.9-8.3 23.1-10.9 9.2-2.9 18.8-4.4 28.4-4.3 1.5 0 3.2 0 4.5.9.3.2.5.4.8.6 1.4 1.5 1.7 3.9 1.9 6.1.6 8.8 1.3 17.6 1.9 26.4ZM125.3 76.5c-4.1.8-7.5.2-14-2.1-8.7-3.1-16-1.9-25.3-1.6.5-.5 1-.9 1.5-1.3 5.5-4.3 12.7-5.9 19.8-6.9 1.4-.2 2.7-.4 4.1-.5 7.8 3.9 10.9 7.8 13.8 12.4Z"
                                      class="st476"/>
                                <path d="M159.8 44.8c-1.2 2-.4 4.6-.5 6.9-.1 1.4-.6 2.8-.7 4.2 0 1.4.5 3 1.8 3.6-2.7 1.5-6.3 3.4-7.4.8-2.1-4.7-.4-5.5-4.5-9.6-3.1-3.1-10-4-10-8.8-.1 0-.3-.2-.4-.3 7.1-4.7 14.9-8.3 23.1-10.9q9.3.3 18.3 2.7c2.8.7 8.1 4.2 5 4.7-6.9.4-13.7 1.7-20.3 3.9-1.7.6-3.5 1.3-4.4 2.8"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient100)"/>
                                <path d="M190.8 43.5c-1.6-2.1-4.8-1.7-7.4-1.5s-5.4 1.1-7.2 3c-2.4 2.6-2.9 6.4-3.2 9.9 0 .3 0 .6.1.9.2.3.7.3 1.1.3 4-.4 8-.7 12-1.1 1.5-.1 3.2-.3 4.4-1.3 1.6-1.2 2.1-3.4 1.8-5.3s-.4-3.4-1.6-4.9"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient101)"/>
                                <path d="M148.7 73.7c-.7 1.3-2.5 1.1-3.9.7-5.4-1.4-10.8-2.7-16.1-4.1-1.8-.4-3.5-.9-5.1-1.8-1.2-.7-2.3-1.6-3.3-2.6 5.3-.8 11.7-3 15.6-4.3 1.8-.6 3.8-1.4 4.8-3 1.2 1.2 1.8 2.9 2.3 4.5.6 2.1 1.1 4.3 2.6 5.7.7.7 1.7 1.2 2.4 1.9s1.2 1.9.7 2.8Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient102)"/>
                                <path d="M117.1 70.6c-2.5 1.1-5.4.9-8.1.4s-5.4-1.3-8.1-1.2c-4.5.1-9 2.6-13.3 1.8 5.5-4.3 12.7-5.9 19.8-6.9 0 0 0 .1.1.2 1 1.3 2.5 2.1 4 2.9 1.8 1 3.6 1.9 5.4 2.9Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient103)"/>
                                <path d="M183.3 40.1c-3.2-.5-6.4 1-8.6 3.3s-3.4 5.4-4 8.5c-.2 1.2-.4 2.5-1.2 3.5-1.2 1.6-3.6 1.8-5.6 1.9-.8 0-1.7 0-2.3-.6-.9-.9-.2-2.4.3-3.6.8-2 .9-4.2.3-6.3-.2-.8-.6-1.7-.2-2.4.2-.4.6-.7 1-1 4.4-2.9 9.9-4.2 20.3-3.4Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient104)"/>
                                <path d="M193.9 59c2.2-3.2 2.7-7.5 1.9-11.3-.9-3.8-3-7.3-5.6-10.2-1.3-1.4-2.7-3.3-1.8-5 1-1.8 3.8-1.4 5.4-2.7.6-.5.9-1.1 1.1-1.8 1.4 1.5 1.7 3.9 1.9 6.1.6 8.8 1.3 17.6 1.9 26.4-1.8-.2-3.6-.4-5.4-.5.3-.3.5-.6.7-1Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient105)"/>
                                <path d="M174.7 35.2c-4.5-1-9.1-2.1-13.6-1.1-2.6.6-5 1.8-7.3 3-3 1.5-6 3.1-9 4.6-.6.3-1.1.6-1.5 1.1s-.6 1.2-.2 1.7c.2.4.6.6 1 .7 3.4 1.7 6.9 3.4 10.3 5.1-.5-2.2-.9-4.7.4-6.6.8-1.1 2-1.8 3.2-2.4 4.6-2.3 9.5-4.1 16.8-6.2Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient106)"/>
                                <path d="M188.6 44.6c-2-1.4-4.8-1.2-7 0-2.2 1.1-3.8 3-5.4 4.9.8.9 2.2.7 3.4.5 1.9-.3 3.8-.7 5.7-1 .9-.2 1.8-.3 2.6-.7s1.6-1 .6-3.6Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient107)"/>
                                <path d="m223.9 87 .5 5.6-45.8 4.1-.5-5.6c0-.7 10.1-2.2 22.8-3.4 12.6-1.1 22.9-1.4 23-.7"
                                      style="fill:url(#New_swatch_27726)"/>
                                <ellipse cx="201.5" cy="94.6" rx="23" ry="1.3" style="fill:url(#New_swatch_27727)"
                                         transform="rotate(-5.1 200.53 94.43)"/>
                                <path d="m222.8 92.8-.2 1-3.7 23.9-30.5 2.7-5-14.7-2.8-8.2-.3-1c.5-.1 1.1-.2 1.8-.4.5-.1 1.2-.2 1.8-.3h.3c.3 0 .6 0 1-.1h.6c.8-.1 1.7-.2 2.6-.4.5 0 1-.1 1.5-.2.4 0 .9-.1 1.3-.2h.7l3.1-.3c.5 0 1-.1 1.5-.2.3 0 .7 0 1.1-.1.6 0 1.1-.1 1.7-.2.5 0 1.1-.1 1.7-.2h1.6c.7 0 1.3-.1 2-.2.7 0 1.4-.1 2.1-.2 1.1 0 2.2-.2 3.3-.2h1.5c.7 0 1.3 0 1.9-.1h9.5Z"
                                      style="fill:url(#New_swatch_26325)"/>
                                <path d="m196.5 119.8-8.1.7-5-14.7c2 3.9 4.3 7.6 6.8 11.3-.6-2.9-1.9-6.3-2.5-9.2 0 .9.1 2.1 0 3.2-1.1-3.5-1.8-8-2.9-11.5 0 0 3.9 8.3 6 12-1.1-3.5-2.2-6.9-3.4-10.4 0 .3.1 1.9.1 2.2-.8-2.1-1.7-4.9-2.4-7.7 1-.1 2-.3 3.2-.4.5 0 1-.1 1.5-.2.4 0 .9-.1 1.3-.2z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient108)"/>
                                <ellipse cx="203.7" cy="119.1" class="st364" rx="15.3" ry=".9"
                                         transform="rotate(-5.1 202.85 118.15)"/>
                                <path d="M195.7 119.8h-.8l-6.6-24.6c.5 0 1-.1 1.5-.2l5.8 24.8Z" class="st383"/>
                                <path d="m202.5 93.7 2.2 25.3h-1l-3-25.1h1.6Z" style="fill:url(#New_swatch_2651)"/>
                                <path d="m216.3 92.8-2.1 25.4h-.7l1.1-25.3h1.7Z"
                                      style="fill:url(#New_swatch_2652)"/>
                                <path d="M202.6 102c.5 5.7 1.1 11.4 1.6 17l-5 .4c-.5-4.4-.9-8.7-1.4-13.1.9 2.6 2 5.1 3.4 7.6 0-4.7-.2-9.3-.8-13.9.1 1.4 0 2.8-.1 4.2L199.1 94c.5 0 1.1-.1 1.7-.2h1.2c0 2.8.3 5.5.6 8.3Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient110)"/>
                                <path d="M215.1 107.4c-.1 3.6-.4 7.2-.8 10.7l-5.3.5c-.4-4.1-.9-8.3-1.3-12.4.6 1.5 1.3 3.1 1.9 4.6 1-4.4 1.4-8.8 1.2-13.3-.4 1.2-.7 2.4-1.1 3.7.3-2.7.5-5.4.5-8 1.1 0 2.1-.1 3-.2-.3 6.8-.5 13.6-.8 20.3.6-1.2 1.1-2.5 1.7-3.7z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient111)"/>
                                <path d="M214.3 118.2h-.7l-4.6.4z" class="st395"/>
                                <path d="m217.1 95.7-1.2 15.4c.7-2 1.5-4 2.2-5.9.3 4.2.1 8.5-.5 12.7l-4 .4.6-8.7c.4-5.6.7-11.1 1.1-16.7h5.4c-.4 3.2-.8 6.5-1.3 9.7-.8-2.2-1.5-4.5-2.3-6.7Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient112)"/>
                                <path d="M194.9 94.5c.9 8 .8 11.9 1.7 19.9l-4.8-19.5 3.1-.3Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient113)"/>
                                <path d="m197.5 94.2.6 11.3c-.5-3.7-1.1-7.4-1.6-11.2.3 0 .7 0 1.1-.1Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient114)"/>
                                <path d="m183.9 95.9 3.2 15.3-5.1-15c.5-.1 1.2-.2 1.8-.3Z"
                                      style="mix-blend-mode:screen;opacity:.5;fill:url(#linear-gradient115)"/>
                                <path d="M204.4 93.6c.7 0 1.4-.1 2.1-.2l.6 22.7-2.7-22.6Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient116)"/>
                                <path d="m220 92.7-2.8 13 .7-12.9h2.1Z"
                                      style="mix-blend-mode:screen;opacity:.5;fill:url(#linear-gradient117)"/>
                                <path d="m223.9 87 .2 2.7c-15.2-1.1-30.7.6-45.8 3.6l-.2-2.2c0-.7 10.1-2.2 22.8-3.4 12.6-1.1 22.9-1.4 23-.7"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient118)"/>
                                <path d="m67.9 314.1-4.2 4.5c.3.2.7 0 1-.1s.5-.5.7-.8c.9-1.2 1.7-2.4 2.4-3.5Z"
                                      style="fill:url(#New_swatch_26423)"/>
                                <path d="M66.1 317.7c-.4-2.1-1.3-4-2.8-5.6q.3-.15.6 0c.3.15.3.2.5.4 1.3 1.5 2.1 3.4 2.2 5.3-.3 0-.5 0-.5-.1"
                                      style="fill:url(#New_swatch_26424)"/>
                                <path d="M81.3 170.6a8 8 0 0 1-3.1-2c2-.1 4 .8 3.1 2"
                                      style="fill:url(#New_swatch_26425)"/>
                                <path d="M78.3 172.4c0 .3.3.6.6.7s.7-.2.9-.4.4-.6.5-.9c.2-.6.5-1.2.7-1.7.1-.2.2-.5.2-.8s-.3-.5-.6-.4c.1 1.2-.3 2.5-1.2 3.3-.2.2-.4.3-.7.3s-.4-.3-.4 0Z"
                                      style="fill:url(#New_swatch_26426)"/>
                                <path d="M134.2 241.7c-.6.7-.7 1.6-.8 2.5-.2 2.3-.4 4.6.3 6.7.1.4.2.7.5 1s.6.5 1 .4c.5-.1.8-.7.9-1.2.8-2.8.5-5.9-.7-8.5.7 2.4 1 5 .7 7.5 0 .3 0 .7-.3.9s-.6.4-.9.3c-.2-.1-.3-.4-.4-.6-1-2.7-1.1-5.8-.4-8.6-.1 0-.2-.1 0-.4Z"
                                      style="fill:url(#New_swatch_26427)"/>
                                <path d="M128.8 242.3c0 1.1.9 2 2 2l170.5-1.8c1.2 0 1.9-1.3 1.3-2.3-.3-.5-.8-.8-1.3-.8l-170.5.9a2 2 0 0 0-2 2"
                                      style="fill:url(#New_swatch_26710)"/>
                                <path d="M142.4 134c.2.8.9 1.3 1.7 1.4l119.2 5.4c1 0 1.8-.9 1.5-1.9-.2-.7-.7-1.1-1.4-1.2l-119.1-6c-1.3 0-2.2 1.1-1.9 2.3"
                                      style="fill:url(#New_swatch_26711)"/>
                                <path d="M135.7 379.3h1.3c0-.1.6-.2.6-.2h.8l121.7-10.5c6.3-1.6 12.4-3 18.2-4.4l-134.8 10.3-6.9.5h-1.3c-1 0-1.9.7-2.2 1.6-.4 1.4.9 2.8 2.6 2.6Z"
                                      style="fill:url(#New_swatch_26712)"/>
                                <path d="M135 377.3c.7-.3 1.4-.5 2.1-.7.2 0 .4-.1.6-.2 1.9-.7 3.9-1.3 5.9-1.9 42.8-13.4 99.6-17.1 149.3-13.6a631 631 0 0 1 39.3-7.6c3.8-.6 7.6-1.1 11.3-1.6 6.4-19.9 8.7-35.8 5.2-50.7-.6-2.5-1.4-5.1-2.3-7.6-4-10.7-11.3-21.2-22.5-32.6-5.9-6-12.9-12.3-21.1-19-.7-.6-1.5-1.2-2.2-1.8-.2-.2-.4-.4-.7-.5-.2-.2-.5-.4-.7-.6 0 .2-.2.4-.2.6v.2c-.5 1-1.1 2-2 2.8-7.5 7.4-32 7.6-122.6 1.3-10.4-.7-21.6-1.5-33.8-2.4h-.3c.4.4.7.8 1.1 1.2.4.5.9 1 1.3 1.5 13.2 15.9 21.4 35.9 23.4 56.4.2 2.1.4 4.2.4 6.3.8 23.1-15.6 47.6-29.6 68.1-.1.2-.2.3-.4.5-.4.6-.8 1.2-1.2 1.7Z"
                                      class="st476"/>
                                <g class="st271">
                                    <path d="m208.8 299.2-1.6.9-11 5.6-.8 1 1.2 4.9-.5 1.2 12 6.1 12 5.8L232 331l12 6 .5-.9-1-8.1-1-.3-11.9-5.6-11.3-6.9-12.3-4.9-.4-1.1.2-1.5 7.6-2.7.5-1.4z"
                                          class="st297"/>
                                    <path d="m235.4 283.1-.1.2-.5 2.4.2.7-13.9 6.8.2 1.3 7.8 3.2-.1-.6 8.3-2.2-.6.4 5.1 13.5 4.2 13.8 5 13.6.1.9 7.5-.1v-.8l-3.8-13.4-5.4-12.8-1.2-14.2-5.2-12.9-1.2-.7z"
                                          style="fill:url(#New_swatch_1631)"/>
                                    <path d="m247.5 267.3-1.7.5 4.5 13.9 7.6 12.8 4.4 13.9 5.6 13.5 4.7 13.8-1.4-.9 6.5 1.7.7-.6 1.1-3-1.5.1 13.1-7.7 13.3-7.5 14.8-4.3v-2.1l1.8-4.9-3.1.6-12.4-7.8-13-6.7-13.7-5.1-12.4-8 .3 1.3 2.2 7.4-1.8 2.1 14.6 3.8 13.1 6.9 12.7 7.8 1 .2-1.3-.3-15.4 9.1-16.7 6.6-1.3.3-5.1-14.3-3.5-14.9-5.6-14.1-4.6-14.5h-1z"
                                          style="fill:url(#New_swatch_1632)"/>
                                </g>
                                <path d="M348.6 300.9c-1.2 6.9-3.7 14.4-7.1 22.2-1.6-1.4-4.2-.7-5.7.8-1.5 1.4-2.4 3.4-3.6 5.2-3.7 5.3-10.7 7.5-17.1 7.2-3.8-.2-7.4-1.1-11-2.4-2.5-.9-5-2-7.5-3-5.9-2.6-11.9-5.4-18.2-6.3-8.4-1.2-17 .8-25.2 3.2-10.4 3-20.7 6.4-30.9 10.4-10 3.8-19.7 8.1-29.3 12.8-2.6 1.3-6.1 2.4-7.9 0-1.6-2.1 0-5.2 1.7-7.3l10.6-13.9c3.9-5.1 7.8-10.2 11.8-15.4 4.2-5.4 8.5-11.3 9-18.1.4-5.9-2.2-11.3-5.9-15.9s-8.9-8.1-13.3-12.1c7.2 3.9 15.5 7.9 26 9.9-13.1-9.6-45.3-23.9-45.3-23.9s47.9 5.9 63.2 10.4c23.8 7.1 20.9-2.8 38.7.1 7.4 1.2 11.7-4.2 17.7-8.7s18.9 2.7 24.7 4.4c11.2 11.4 18.5 21.9 22.5 32.6.9 2.5 1.7 5 2.3 7.6Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient119)"/>
                                <path d="M326.3 309.2c-6.5 4.3-12.1 10-16.4 16.6-.4.6-.8 1.3-.7 2.1.1 1.2 1.4 1.9 2.5 2.3 4 1.4 8.3 1.5 12.3.3 3.4-1 6.7-3.1 8.6-6.1s2.5-7 .9-10.2-5.8-5.9-7.2-4.9Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient120)"/>
                                <path d="M328.2 301.2c-2.1 3.9-7.2-.8-14 7.5-2.3 2.8-6.6 12-7.7 12.4-15.6 5.2-26.6-4.7-42.6-1.4-14.5 3-28.3 9-41.9 14.9-15.9 5.6 26.5-24.9 33.3-37.1 7-12.6-22.2-22.8-40.7-33.4 17.5 0 37.3 11.4 50.8 11.4 9.2 0 13.6-7.6 17.7-7.1 29.6 3 14.3-16.3 30.7.1 11.4 11.4 17.7 26.9 14.4 32.7"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient121)"/>
                                <path d="M135 377.3c.7-.3 1.4-.5 2.1-.7.2 0 .4-.1.6-.2 1.9-.7 3.9-1.3 5.9-1.9 42.8-13.4 99.6-17.1 149.3-13.6a631 631 0 0 1 39.3-7.6c3.8-.6 7.6-1.1 11.3-1.6 6.4-19.9 8.7-35.8 5.2-50.7-.6-2.5-1.4-5.1-2.3-7.6-.9 8.6-3.6 16.8-9.1 23.5-.9 1.1-1.8 2.1-2.8 3.1-5.3 5.2-12 8.7-19.3 11.1-3.6 1.2-7.3 2.1-11.1 2.9-5.3 1.1-10.7 1.8-15.9 2.5-10.2 1.3-20.6 2.6-31 3.2-10.2.6-20.3.5-30.2-.8-1.6-.2-3.1-.5-4.6-.7-7-1.3-13.9-3.2-20.5-6.1-1.5-.7-3-1.4-4.4-2.1-12.9-6.7-23.8-17-31.5-29.3.2 2.1.4 4.2.4 6.3.8 23.1-15.6 47.6-29.6 68.1-.1.2-.2.3-.4.5-.4.6-.8 1.2-1.2 1.7Z"
                                      class="st176"/>
                                <path d="M297.1 339.1c8.3 5.3 16.6 10.6 24.9 15.8 3.4-.6 6.8-1.2 10.1-1.7-.7-6.4-3.5-12.8-8.9-17.4.7 4.7 1.4 9.4 2 14.1.2 1.2.2 2.7-1 3.2-1.4.6-3.1-.5-4.3-1.5-6.5-5.5-13.5-10.5-21-14.9-1.1-.6-2.6-1.2-3.3-.4-.8.9.5 2.1 1.6 2.8Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient123)"/>
                                <path d="M300.5 239.9c-37.3-6.7-72.2-4.4-165.3.3h-.2c8.6-17.1 13.7-31.7 18.6-50.2s5.9-38.6-.7-56.6c30.7 5.3 60.2 10.6 90 10 5.8-.1 12.1-.7 16.5-4.5 6.9 6.9 12.7 14.3 17.7 22.2 8.4 13.4 14.3 28.1 18.6 43.6.8 3.1 1.6 6.1 2.3 9.2 1.7 7.5 1.3 18.2 2.5 25.9Z"
                                      class="st476"/>
                                <path d="M295.7 204.8c0 1.5-.4 3-1.5 3.9-1.3 1.1-3.8.4-3.7-1.2-5.2 3.1-11.6 3.4-17.6 2.6-6-.9-11.7-2.8-17.7-3.8-20.5-3.7-41.3 2.7-62.1 3.8h-2c-4.5.2-8.9 0-13.3-.4-.6 0-1.3-.2-1.6-.8-.3-.7.2-1.4.7-2 2.6-3.1 5.2-6.1 7.9-9.2 2.5-2.9 5-5.9 6.4-9.4 1.8-4.5 1.7-9.7.5-14.4-1.2-4.8-7.7-15-5-12.9 3.6 2.8 19.9 12.5 25.5 9.1 2.7-2.4-1.8-8.1-4.7-11s-6.7-4.7-10.6-6c8.4 1.3 17 2.1 25.5 2.2 12.5.1 25.5-1.2 36.2-7.5-1.7 2.8-3 5.8-3.8 9-.2.8-.3 1.6 0 2.3s1.2 1.3 1.9 1c.6-.3.8-1.1.9-1.7.6-3 1.1-6 1.7-9.1 3.3 8.8 7.1 18.2 15 23.5q1.35.9 3 .9c2.2.1.7-8.4-.2-12.4 2.8 4.5 5.3 9.1 7.6 13.8 3.1 6.4 5.7 13 7.9 19.7 1.1 3.3 2.1 6.6 3 10Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient124)"/>
                                <path d="m289.5 194.7-40.4-3c-9-.7-18.4-1.3-26.8 2-10.4 4-18.5 13.6-29.2 16.3-.7.2-1.4.3-2.1.4v-.3c.9-4.4 5-7.5 8.7-10.2 3.7-2.8 7.7-6.6 7.4-11.3-.3-5.8-6.8-9.3-9-14.8 4.6.8 9.2 1.5 13.7 2.3 1.2.2 5.1.2 6.9-1.9s1.5-5.6-.4-7.6c-.8-.9-1.9-1.6-2.7-2.5s-1.3-2.4-.6-3.4c.7-1.2 2.4-1.3 3.9-1.2 8.9.4 17.8.8 26.7 1.3 1.5 0 3.2.2 4.4 1.1 1.9 1.5 2.6 5 5 5s3.5-3.6 5.9-3.8c1.2-.1 2.4.8 3 1.8.6 1.1.9 2.3 1.3 3.5 1.7 5.4 6.8 9.8 12.4 9.8 2.6 0 2-1.5 3.9-3.3 4 6.1 9 20 7.9 20Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient125)"/>
                                <path d="M300.5 239.9c-59-7.6-108.3-16.6-165.3.3 7.5-13.2 15.1-26.5 22.6-39.7-.4 2.4-5.3 17.9-4 19.9 2.3 3.7 12-7.1 16.4-6.5 4.3.6 8.8 0 13.1-.5 29-3.6 58.4-4 87.6-5.4 2.3-.1 4.6-.2 6.6-1.2 2.1-.9 3.8-2.9 3.8-5.1 0-1.5-.7-2.9-.7-4.4s1.1-3.2 2.6-2.8c.6.2 1.1.7 1.5 1.3 4.7 5.9 9.1 12 13.3 18.3 1.7 7.5 1.3 18.2 2.5 25.9Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient126)"/>
                                <path d="M150.5 247.2c17.1 4.6 34.7 9.4 49.1 19.7-17.3-1.5-34.2-8-49.1-19.7"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient127)"/>
                                <path d="M162.1 365c30.8-21.1 68.9-31.1 106.1-28-35.4 8.3-70.6 17.9-106.1 28"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient128)"/>
                                <path d="M299 242.7c-1 3.3-4 5.6-7.2 6.8s-6.7 1.3-10.1 1.4c-19.7.8-39.4 1.3-59.1 1.8 18.3 2.4 36.8 4.7 55 1.8 8.4-1.3 22-4.9 21.3-11.8Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient129)"/>
                                <path d="M147.8 245.5c5.7 7 11.9 13.6 18.5 19.8 2.8 2.7 5.8 3.7 6.5 3s-1.4-3.2-3.8-5.8c-4.9-5.2-11.9-10.9-17-15.8 20.3 1.9 37.5 9.5 44.5 6.2-9.4-6.8-47.9-6.7-48.6-7.4Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient130)"/>
                                <path d="M147 366.6a162 162 0 0 0 29.4-50c2.2 4.6 1.9 10.2.3 15s-4.6 9.2-7.7 13.3c-6.9 9.2-14.7 17.8-21.9 21.7Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient131)"/>
                                <path d="M163.4 142.4c-1.4-1.7-2.7-3.5-4.1-5.2 3.9 8.6 11.2 15 16.8 22.6 4.7 6.4 8.2 13.5 11.7 20.6 1.8-5.6.3-11.9-2.8-17-3-5.1-7.5-9.1-11.9-13.1-4.4-3.9-9-7.8-9.7-7.9"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient132)"/>
                                <path d="m168.3 140.5-5.2-2.4c10 7.2 21.8 12 34.1 13.6-10.2-3.4-20.5-7.4-28.9-11.3Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient133)"/>
                                <path d="M258 144c-2.4 1.3-5 2.3-7.6 3-4.9 1.2-10 1.3-15 1.4-10.6.1-21.2.3-31.8.4 16.2 3.5 33 1.3 49.4-.9 1.4-.2 2.9-.4 4.1-1.1s2.2-2 .9-2.9Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient134)"/>
                                <path d="M261.3 145.9c6.3 6.7 11.2 14.7 14.4 23.3-4.3-2.6-8.2-6-10.8-10.2a26 26 0 0 1-3.6-13.1"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient135)"/>
                                <path d="M294.1 227.4c-17-4.9-30-20.4-47.4-22.9 14.2 11 31 18.5 47.4 22.9"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient136)"/>
                                <path d="M167.4 258.5c-2.4-1.5-4.7-2.9-7.1-4.4 15.2 11.4 30.3 22.9 45.5 34.3.9.7 2.3 1.4 3.2.7s.6-2.1.1-3.1c-3.4-7.6-11.3-12.2-19-15.5s-15.1-7.3-22.7-12"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient137)"/>
                                <path d="M168.6 165.9c-2.7-9.3-6.9-18.2-12.2-26.3 4.1 5.7 8.3 11.4 12.4 17.1 1 1.4 2 2.8 2.2 4.5s-.8 3.6-2.4 4.8Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient138)"/>
                                <path d="M170.1 144.2c-2-1.3-4.1-2.6-6.1-3.9 5.5 4.6 11.1 9.2 16.6 13.9 3.3 2.7 6.7 5.5 10.7 7 4 1.4 8.9 1.2 12.1-1.6-12.1-4.4-24.2-9.5-33.3-15.3Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient139)"/>
                                <path d="M173.4 164.9c-.5 10.8-6.4 36.9-19.4 51.6 7.6.7 14.9-4.6 18.5-11.4s4.6-17 4.3-24.7-2.9-22.8-3.3-15.5Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient140)"/>
                                <path d="M132.7 240.2c.9.3 1.4 1.1 1.6 2s0 1.4 0 2.3c1.1 0 .6-1.2.4-2s-.7-1.5-1.1-2.2c-.1-.2-.2-.4-.4-.5s-.4-.2-.4.4Z"
                                      style="fill:url(#New_swatch_26428)"/>
                                <path d="M134 240.1c.8.9 1.6 1.8 1.9 2.9 0 .5 0 1-.4 1.2.1.1.3.2.5.3s.4 0 .5-.1.1-.4 0-.6c-.3-1.6-1.2-3.1-2.6-4v.3Z"
                                      style="fill:url(#New_swatch_26429)"/>
                                <path d="M142.7 243.1c-3.2-.7-4.5-2.1-7.8-2.8-.4 0-3.2.4-3.2 0 0-.3.7-.5 1-.7.9-.4 1.9-.5 2.8-.2.9.2 1.8.6 2.7 1.1 2 1 4.1 2 4.5 2.7Z"
                                      style="fill:url(#New_swatch_26430)"/>
                                <path d="M154.8 135.1h.3c-1-1.9-2.5-3.6-4.2-5.1-.2-.2-.5-.3-.7-.2-.2 0-.3.4-.3.6s.2.4.4.6l5.2 5.8c0-.3 0-.6-.7-1.7"
                                      style="fill:url(#New_swatch_26431)"/>
                                <path d="M156.2 136.4c-1.4-1.7-2.4-3.7-3-5.8 1.2.7 2 1.9 2.5 3.1s.8 2.6.5 2.7"
                                      style="fill:url(#New_swatch_26432)"/>
                                <path d="M260.1 140.3c-.3-1.4-1-2.6-2-3.6.9.4 1.9.8 2.6 1.6s.8 2.1-.6 2"
                                      style="fill:url(#New_swatch_26433)"/>
                                <path d="M136.4 375c.7.8 1.4 1.5 1.9 2.4.2.3.4.7.4 1.1s-.2.8-.7.9c-.7.2-1.1 0-1.1 0h.6s1-2.1-2.1-4.1c.3-.3.5-.6.9-.1Z"
                                      style="fill:url(#New_swatch_26434)"/>
                                <path d="M240.6 373.5c.2 0 .3 0 .5-.1h.3c29-28.8 58.2-67.5 78.7-104.7 1.5-2.7 3-5.5 4.4-8.2 2.1-4 4.1-8 5.9-12 .7-1.4 1.3-2.8 1.9-4.2.1-.3.2-.5.3-.7 0-.1 0-.2.1-.3.2-.5.5-1 .7-1.5s.4-.9.6-1.4c0-.2.2-.4.2-.6.2-.5.5-1.1.7-1.6 1.3-3 2.5-6 3.6-8.9.3-.9.6-1.7.9-2.5.5-1.3.9-2.6 1.3-3.8v-.1.1c-.8 1.1-1.5 2.3-2.2 3.2-.6.9-1.1 1.7-1.3 2.3 0 .1 0 .2-.1.3-1 3-2.1 5.9-3.2 8.9-.2.5-.4 1.1-.6 1.6 0 .2-.2.4-.3.6-.2.4-.3.8-.5 1.2s-.4.9-.6 1.3c0 .1 0 .2-.1.3-.1.3-.3.7-.4 1-.5 1.3-1.1 2.5-1.6 3.8-1.8 4.1-3.8 8.3-5.9 12.5l-4.2 8.1c-20.4 38-50.4 76.1-79.2 105.6Z"
                                      style="fill:url(#New_swatch_26435)"/>
                                <path d="M383.6 236c29.8 19.9 60.8 33.6 96.4 37.4 1.5-.4 1.5-1.2 1.1-2.3-42.2 0-75.4-21.2-108.9-44.4 5 4.2 10 8.4 11.4 9.3"
                                      style="fill:url(#New_swatch_26436)"/>
                                <path d="M268.2 118.4c22 45.9 44 91.9 66 137.8 19.4-8.2 45.6-16.1 66-10.8-51-46.4-87.6-77.7-132-127"
                                      class="st476"/>
                                <path d="M326.3 224.5c-11.8-21-23.5-42-33.2-64 15.2 10.2 29.4 21.8 42.5 34.6-2.7.2-5.1-1.2-7.4-2.6-8.3-5.1-16.7-10.3-25-15.4 10.7 18.4 27.6 32.1 44.2 45.4-8.3-2.8-15.7-7.6-23.1-12.3.4 7.5 6.6 13.4 12.7 17.8 6.2 4.4 13.1 8.4 16.5 15.2l-16.2 2.1c-1.1.1-2.2.3-3.2-.2-1.1-.6-1.6-1.7-2.1-2.8-2.4-5.6-2.5-11.9-5.7-17.6Z"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient141)"/>
                                <path d="M275.8 364.8c1.3-.3 2.5-.6 3.7-.9 2.2-2.3 4.2-4.8 6.2-7.2 17.5-21.1 34.9-42.2 52.4-63.3l14.2-17.2c-3.4 3.1-7.5 5.8-12.3 12.1-2.3 3-4.5 5.9-6.8 8.8-18.2 23.3-37.3 45.9-57.4 67.7"
                                      style="fill:url(#New_swatch_26437)"/>
                                <path d="M199.6 123c23.1 28.9 63.2 66.6 91.7 89.6 16.7 10.8 62.9 53.9 103.6 57.1 27.3 4.3 37.9 6.9 81 6.9l2.5-2.5c-22.2 0-48.1 2.2-82.4-5.2-36.5-19.8-70-23.2-133.8-79.2-26.7-23.5-38.4-35.8-62.5-63.9-.6-.8-.8-1.8-.2-2.7s0-.1.1-.1"
                                      style="fill:url(#New_swatch_26438)"/>
                                <path d="M278.5 171.2" style="mix-blend-mode:screen;fill:url(#linear-gradient142)"/>
                                <path d="M398.6 270.1c-8.5.5-16.9 2-25 4.5-10.6 3.3-20.7 8.2-29.8 14.5-3.7 2.6-7.1 5.3-10.4 8.4-9.8-21.8-19.1-44.4-34.2-63-15.4-19-15.1-20.6-48.3-56.5 44 40.9 93 66.4 147.7 92.1"
                                      class="st476"/>
                                <path d="M194.6 26.1c26 34.2 47.2 66.3 76.7 97.5.9.2-1.7-4.2-1.8-3.6-21.8-21.8-48.4-60.8-75.2-96.5-.6 1.4-.7 1.4.3 2.6"
                                      style="fill:url(#New_swatch_26439)"/>
                                <path d="m260.2 186.2-.3-.3c.1 0 .2.2.3.3"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient143)"/>
                                <path d="M368.2 268.7c-9.4 2.9-18.4 7.3-26.5 12.9-13.1-16.3-26.3-32.5-39.7-48.6-7-10.9-20.3-23.4-28.3-33.6 11.7 10.2 26.1 21.2 39.5 29 2.5 1.5 9.5 4 8.4 6.7 14.3 12.7 30 24 46.6 33.5Z"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient144)"/>
                                <path d="M376.8 235.5c-25.9-9-48.4-27.5-62.4-51 20.3 14.6 39.6 30.4 62.4 51"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient145)"/>
                                <path d="M364.3 234c-11.5-5.6-23-11.1-34.5-16.7 8.3 10.4 20.8 17.3 34.5 16.7"
                                      style="mix-blend-mode:screen;fill:url(#linear-gradient146)"/>
                                <path d="M383.2 266.2c-21.4-4.8-41.5-15.7-57-31.2 21.1 12.1 42.4 24.2 57 31.2"
                                      style="mix-blend-mode:multiply;fill:url(#linear-gradient147)"/>
                            </g>
                            <g style="opacity:.2">
                                <g style="clip-path:url(#clippath-1)">
                                    <path d="M242.9 383.7v5.6c0 .6.3 1.1.9 1.2.5 0 .9-.2.9-.7.1-1.3.4-3.7.6-5.6-.6-.3-1.3-.5-2.4-.5"
                                          class="st610"/>
                                    <path d="M248.5 384.4v5.6c0 .6.3 1.1.9 1.2.5 0 .9-.2.9-.7.1-1.3.4-3.7.6-5.6-.6-.3-1.3-.5-2.4-.5"
                                          style="fill:url(#New_swatch_1968)"/>
                                    <path d="M254.3 384.9v5.6c0 .6.3 1.1.9 1.2.5 0 .9-.2.9-.7.1-1.3.4-3.7.6-5.6-.6-.3-1.3-.5-2.4-.5"
                                          style="fill:url(#New_swatch_1969)"/>
                                    <path d="M260 385.5v5.6c0 .6.3 1.1.9 1.2.5 0 .9-.2.9-.7.1-1.3.4-3.7.6-5.6-.6-.3-1.3-.5-2.4-.5"
                                          style="fill:url(#New_swatch_19610)"/>
                                    <path d="m242.4 384.9 21.7-4.5.7 2.4-22.7 6.6z" class="st521"/>
                                    <path d="m237.9 380.5 3.2 1.9-.3 2.7-3.2-1.8z"
                                          style="fill:url(#New_swatch_2727)"/>
                                    <path d="m237.9 380.5 3.2 1.9-.3 2.7-3.2-1.8z"
                                          style="mix-blend-mode:multiply;fill:url(#New_swatch_2728)"/>
                                    <path d="m205.3 111.9 38 269.6.9.4L205.5 109z" class="st273"/>
                                    <path d="m205.3 111.9 43.6 270 1 .4L205.5 109z"
                                          style="fill:url(#New_swatch_1288)"/>
                                    <path d="m242.8 382-.5-4.2h1.7l1.3 4.5c-.8 0-1.5 0-2.4-.3Z" class="st324"/>
                                    <path d="m248.5 382.3-.5-4.2h1.7l1.3 4.5c-.8 0-1.5 0-2.4-.3Z"
                                          style="fill:url(#New_swatch_26713)"/>
                                    <path d="m205.3 111.9 49.1 270.3.9.3L205.5 109z"
                                          style="fill:url(#New_swatch_1289)"/>
                                    <path d="m253.9 382.5-.5-4.2h1.7l1.3 4.5c-.8 0-1.5 0-2.4-.3Z"
                                          style="fill:url(#New_swatch_26714)"/>
                                    <path d="m205.2 112 54.7 270 1 .4-55.4-273.3z"
                                          style="fill:url(#New_swatch_12810)"/>
                                    <path d="M240.4 289.6c0-.8.7-1.3 1.4-1.1s1.3 1 1.2 1.8-.7 1.3-1.4 1.1-1.3-1-1.2-1.8"
                                          class="st494"/>
                                    <path d="M236.8 289.7c0-.8.7-1.3 1.4-1.1s1.3 1 1.2 1.8c0 .8-.7 1.3-1.4 1.1s-1.3-1-1.2-1.8"
                                          style="fill:url(#New_swatch_26440)"/>
                                    <path d="M233.3 289.8c0-.8.7-1.3 1.4-1.1s1.3 1 1.2 1.8-.7 1.3-1.4 1.1-1.3-1-1.2-1.8"
                                          style="fill:url(#New_swatch_26441)"/>
                                    <path d="M229.6 289.8c0-.8.7-1.3 1.4-1.1s1.3 1 1.2 1.8-.7 1.3-1.4 1.1-1.3-1-1.2-1.8"
                                          style="fill:url(#New_swatch_26442)"/>
                                    <path d="M224 206c0-.4.4-.7.8-.6s.7.5.7 1-.4.7-.8.6-.7-.5-.7-1"
                                          style="fill:url(#New_swatch_26443)"/>
                                    <path d="M222.2 206.1c0-.4.4-.7.8-.6s.7.5.7 1-.4.7-.8.6-.7-.5-.7-1"
                                          style="fill:url(#New_swatch_26444)"/>
                                    <path d="M220.3 206.1c0-.4.4-.7.8-.6s.7.5.7 1-.4.7-.8.6-.7-.5-.7-1"
                                          style="fill:url(#New_swatch_26445)"/>
                                    <path d="M218.4 206.2c0-.4.4-.7.8-.6s.7.5.7 1-.4.7-.8.6-.7-.5-.7-1"
                                          style="fill:url(#New_swatch_26446)"/>
                                    <path d="m259.5 382.4-.5-4.2h1.7l1.3 4.5c-.8 0-1.5 0-2.4-.3Z"
                                          style="fill:url(#New_swatch_26715)"/>
                                    <path d="M438.8 357.3c-3.6 14.9-6.5 28.3-10.1 43.2-4.8-.4-9.6-.7-14.3-.5 2.7-8.6 2.9-17.7.4-26.3-.7-2.6-1.6-5.5.1-7.6 1-1.2 2.5-1.9 4-2.5 7.8-3.2 15.5-6.5 19.7-6.2Z"
                                          class="st336"/>
                                    <path d="M419.5 350.1c6.7-.4 15.7-.2 22.4.3-.4 6.8-1.8 10.3-3.6 15.6-5.4-.6-22.7-1.9-27.2-1.4 3.1-3.3 3.5-7.1 8.4-14.6Z"
                                          class="st352"/>
                                    <path d="M138.7 374.1c-.7 4.3-.8 12.5-.8 12.5.7-.2 2.1.2 2.8 0q-.45-6.75.3-13.5c-.5.6-1.2 1-2.3 1"
                                          class="st322"/>
                                    <path d="M141 373.2c.3 0 .9 0 1.2-.1-.3 2.5-.4 5-.4 7.5 0 1.1 0 2.1.2 3.1 0 .4.2.9.2 1.3s-.3.9-.7 1.1-1.1 0-1.2-.4c0 0 0-7.7.7-12.5"
                                          style="fill:url(#New_swatch_25931)"/>
                                    <path d="M96 374.2c-.8 5.2-.9 10.5-.2 15.7.9-.2 1.7-.4 2.6-.7q-.6-8.1.3-16.2c-.6.7-1.4 1.2-2.7 1.2"
                                          style="fill:url(#New_swatch_25932)"/>
                                    <path d="M98.7 373.2c.4 0 1.1-.1 1.5-.1-.3 3-.5 6-.5 9 0 1.3 0 2.5.3 3.8.1.5.2 1 .2 1.5s-.3 1.1-.9 1.3-1.3 0-1.5-.5c-.3-5-.2-9.9.8-14.9Z"
                                          style="fill:url(#New_swatch_25933)"/>
                                    <path d="M107.7 374.2c-.8 5.2-.9 10.5-.2 15.7.9-.2 1.7-.4 2.6-.7q-.6-8.1.3-16.2c-.6.7-1.4 1.2-2.7 1.2"
                                          style="fill:url(#New_swatch_25934)"/>
                                    <path d="M110.4 373.2c.4 0 1.1-.1 1.5-.1-.3 3-.5 6-.5 9 0 1.3 0 2.5.3 3.8.1.5.2 1 .2 1.5s-.3 1.1-.9 1.3-1.3 0-1.5-.5c-.3-5-.2-9.9.8-14.9Z"
                                          style="fill:url(#New_swatch_25935)"/>
                                    <path d="M147.3 373.1s-1.6 10.4-.6 12.6 1.9 0 2.6-.1q-.45-6.75.3-13.5c-.5.6-2.3 1-2.3 1"
                                          style="fill:url(#New_swatch_25936)"/>
                                    <path d="M149.6 371.4c.3 0 .9.7 1.2.7-.3 2.5-.4 5-.4 7.5 0 1.1 0 2.1.2 3.1 0 .4.2.9.2 1.3s-.3.9-.7 1.1-1.6 1-1.6.6c-.5-5 1.1-14.3 1.1-14.3"
                                          style="fill:url(#New_swatch_25937)"/>
                                    <path d="M177.7 372.7c-.7 4.3-.7 8.7-.1 13.1.7-.2 1.4-.4 2.2-.5q-.45-6.75.3-13.5c-.5.6-1.2 1-2.3 1Z"
                                          style="fill:url(#New_swatch_25938)"/>
                                    <path d="M180 371.8c.3 0 .9 0 1.2-.1-.3 2.5-.4 5-.4 7.5 0 1.1 0 2.1.2 3.1 0 .4.2.9.2 1.3s-.3.9-.7 1.1-1.1 0-1.2-.4c-.3-4.2-.2-8.2.7-12.5"
                                          style="fill:url(#New_swatch_25939)"/>
                                    <path d="M169.1 372.7c-.7 4.3-.7 8.7-.1 13.1.7-.2 1.4-.4 2.2-.5q-.45-6.75.3-13.5c-.5.6-1.2 1-2.3 1Z"
                                          style="fill:url(#New_swatch_25940)"/>
                                    <path d="M171.3 371.8c.3 0 .9 0 1.2-.1-.3 2.5-.4 5-.4 7.5 0 1.1 0 2.1.2 3.1 0 .4.2.9.2 1.3s-.3.9-.7 1.1-1.1 0-1.2-.4c-.3-4.2-.2-8.2.7-12.5"
                                          style="fill:url(#New_swatch_25941)"/>
                                    <path d="M185.6 372.4c-.7 4.3-.7 8.7-.1 13.1.7-.2 1.4-.4 2.2-.5q-.45-6.75.3-13.5c-.5.6-1.2 1-2.3 1Z"
                                          style="fill:url(#New_swatch_25942)"/>
                                    <path d="M187.9 371.5c.3 0 .9 0 1.2-.1-.3 2.5-.4 5-.4 7.5 0 1.1 0 2.1.2 3.1 0 .4.2.9.2 1.3s-.3.9-.7 1.1c-.5.2-1.1 0-1.2-.4-.3-4.2-.2-8.2.7-12.5"
                                          style="fill:url(#New_swatch_25943)"/>
                                    <path d="M194.1 372c-.5 4.4-.3 8.8.5 13.1l2.1-.6c-.5-4.5-.7-9-.4-13.5-.5.6-1.1 1-2.2 1.1Z"
                                          style="fill:url(#New_swatch_25944)"/>
                                    <path d="M196.3 371.1c.3 0 .9-.1 1.2-.1-.1 2.5-.2 5 0 7.5 0 1 .1 2.1.4 3.1.1.4.2.8.2 1.3s-.2.9-.7 1.1-1.1 0-1.2-.4c-.4-4.1-.6-8.2.1-12.5"
                                          style="fill:url(#New_swatch_25945)"/>
                                    <path d="M203.5 368.8c-.4 4.4-.1 8.8.7 13.1.7-.2 1.4-.4 2.1-.7-.6-4.5-.9-9-.6-13.5-.4.6-1.1 1-2.2 1.1"
                                          style="fill:url(#New_swatch_25946)"/>
                                    <path d="M205.7 367.9c.3 0 .9-.1 1.2-.2 0 2.5 0 5 .1 7.5 0 1 .2 2.1.4 3.1.1.4.3.8.2 1.3s-.2.9-.7 1.1-1.1 0-1.2-.4c-.5-4.1-.7-8.2-.1-12.5Z"
                                          style="fill:url(#New_swatch_25947)"/>
                                    <path d="M212.2 369c-.3 4.4.1 8.3.9 13.1.7-.2 1.4-.4 2.1-.7-.7-4.5-.9-9-.8-13.5-.4.6-1.1 1-2.2 1.1"
                                          style="fill:url(#New_swatch_25948)"/>
                                    <path d="M214.4 368c.3 0 .9-.2 1.2-.2 0 2.5 0 5 .2 7.5 0 1 .2 2.1.5 3.1.1.4.3.8.3 1.3s-.2.9-.7 1.1-1.1 0-1.2-.3c-.3-3.3-.8-8.2-.3-12.5"
                                          style="fill:url(#New_swatch_25949)"/>
                                    <path d="M469.6 333.2c-1.2 1.5-2.6 2.1-4.4 1.4-2.3-.9-2.9-3.7-3.2-6.1-1.1-8.7 4.4-31.8 5.3-40.9.1.1.6 1.6.6 2.1-1 9.4-6.3 30.5-4.2 39.7.4 1.7 1.2 3.6 3 3.7 4 .2 6-10.6 7.1-17.8 1.2-7.5 2-20.5 2.1-28.1 0 3.2.5 4.5.7 4.6.4 8-3.5 36.9-7 41.3Z"
                                          style="fill:url(#New_swatch_26447)"/>
                                    <path d="M108.8 372.7c36.9-2.5 73.6-3.5 109.9-7.8-.3 1.7-.6 3.4-.8 5-41.9 4.9-96.4 7-127.2 5.7 7.2-1.6 14.4-2.7 18.1-2.9"
                                          class="st594"/>
                                    <path d="M103.3 370.9c40-.9 79-2.8 115.4-7.2-.3 1.7-.6 3.4-.8 5-41.9 4.9-96.4 7-127.2 5.7 7.2-1.6 9-3.5 12.6-3.6Z"
                                          class="st361"/>
                                    <path d="M89.3 374.4a72 72 0 0 0-.2 20.7l3.4-.9c-.5-7.1-.4-14.3.4-21.4-.8.9-1.9 1.5-3.6 1.5Z"
                                          style="fill:url(#New_swatch_25950)"/>
                                    <path d="M92.9 373c.6 0 1.4-.2 2-.2-.4 3.9-.6 7.9-.6 11.9 0 1.7 0 3.3.4 5 .1.7.3 1.4.3 2s-.4 1.4-1.2 1.7-1.8 0-1.9-.7c-.4-6.6-.3-13 1.1-19.8Z"
                                          style="fill:url(#New_swatch_25951)"/>
                                    <path d="M101.4 369.6a72 72 0 0 0-.2 20.7l3.4-.9c-.5-7.1-.4-14.3.4-21.4-.8.9-1.9 1.5-3.6 1.5Z"
                                          style="fill:url(#New_swatch_25952)"/>
                                    <path d="M105.1 368.3c.6 0 1.4-.2 2-.2-.4 3.9-.6 7.9-.6 11.9 0 1.7 0 3.3.4 5 .1.7.3 1.4.3 2s-.4 1.4-1.2 1.7c-.7.3-1.8 0-1.9-.7-.4-6.6-.3-13 1.1-19.8Z"
                                          style="fill:url(#New_swatch_25953)"/>
                                    <path d="m146.8 110 11.9 386.7 18 11.8-26.9-398.8z"
                                          style="fill:url(#New_swatch_26326)"/>
                                    <path d="M128.8 139.7c-.9 1.2-1.7 2.3-2.5 3.2-4.9 5.8-7 5.6-10.9 5.3-.8 0-1.6-.1-2.5-.1-2.7 0-6.3.2-11.6 1.9h-.1c-1.9.6-3.6 1-5 1.3-2.7.4-4.6.2-6-.3-3.7-1.2-5.1-3.8-13.3-.4.4-1.7 1.2-5.1 2.6-7.4 1-1.5 2.2-2.5 3.8-2.3 4.5.5 7.1 1.5 9.1 2.1 1.5.5 2.5.7 3.7.3q.9-.3 1.5-.6c3.8-1.7 5.1-3.7 6.3-6.7.6-1.6 1.2-3.6 2.1-6 8.6-1.2 15.8 3.6 22.7 10Z"
                                          class="st476"/>
                                    <path d="M150.5 141c-.3-.1-.6-.3-.9-.4-1.5-.6-3-1.3-4.5-1.8-2.5-.9-5-1.5-7.6-1.5s-5.3.6-6.8 1.5c-.6.4-1.2.8-1.7 1.3a5 5 0 0 1-6.2.6c-5.3-3.5-12-4.7-16-5.4-.5 0-1-.4-1.3-.8s-.5-1-.4-1.6c.7-3.8 3.5-7.2 6.9-9.3 4-2.4 8.7-3.2 13.3-3.9 4.1-.6 8.3-1 12.4-1.4l4.9-.3h2c.6 0 1.2.2 1.7.5 1.3.9 1.7 2.6 1.8 4.2l1.2 10 .3 2.6c.2 1.9.5 3.8.7 5.7Z"
                                          class="st476"/>
                                    <path d="M143.2 121.9c1 2.1-2.7 3.2-4.9 4-2.5.8-8.9-2.4-15.8.2-3.1 1.2.8 6.3 1.5 7.5s1.3 2.9.4 4c-6.3-1-12.6-2.1-18.9-3.1-.3-.4-.5-1-.4-1.6.7-3.8 3.5-7.2 6.9-9.3 4-2.4 8.7-3.2 13.3-3.9 4.1-.6 8.3-1 12.4-1.4 1.7.8 4.6 1.9 5.4 3.6Z"
                                          class="st50"/>
                                    <path d="M145 138.8c-2.5-.9-5-1.5-7.6-1.5s-5.3.6-6.8 1.5c-1.6-1.3-3.2-2.8-3.4-4.9-.2-2.5 2.3-4.7 4.8-4.9s5 1 7 2.6c2.4 1.9 4.4 4.3 5.8 7 0 0 0 .2.1.2Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient148)"/>
                                    <path d="M96.3 150.9v.3c-2.7.4-4.6.2-6-.3-.5-.5-1-1-1.4-1.5a27 27 0 0 0-9.3-6.3c1-1.5 2.2-2.5 3.8-2.3 4.5.5 7.1 1.5 9.1 2.1-.4.4-.8.7-1 1.2-.3.8.2 1.8.8 2.4.8.7 1.8 1.2 2.6 1.8s1.6 1.7 1.4 2.7Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient149)"/>
                                    <path d="M112.9 148c-2.7 0-6.3.2-11.6 1.9-1.1-.9-2.2-1.9-3-3.1-.1-.2-.3-.4-.2-.6 0-.2.3-.4.6-.4 4.7-1.6 10.2-.7 14.3 2.1Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient150)"/>
                                    <path d="M149.8 139c0 .5 0 1.1-.2 1.6-1.5-.6-3-1.3-4.5-1.8-.9-2.4-2-4.8-3.6-6.8-2.1-2.5-5.2-4.4-8.4-4.2-3.3.2-8.4 4.6-9.1 3.2s-.7-3.2.4-4.3c.9-1 2.4-1.2 3.8-1.3 4.1-.2 8.2 0 12.2.7 1.2.2 2.6.4 3.5-.4.7-.6.9-1.7.7-2.7-.2-.9-.7-1.8-1.2-2.6-.4-.6-.7-1.3-.7-2 0-.2 0-.3.1-.5h2c0 .2.2.3.2.5 1.8 4.6 3.7 9.3 4.5 14.2l.3 2.6c0 1.2.1 2.5 0 3.7Z"
                                          class="st116"/>
                                    <path d="M126.4 142.8c-4.9 5.8-7 5.6-10.9 5.3.1-.5.2-1 0-1.5-.3-1-1.3-1.7-2.3-2.1-3.6-1.7-7.8-2.1-11.7-1.2-1 .2-2.3.6-3.1-.1-.2-.2-.4-.4-.5-.7 3.8-1.7 5.1-3.7 6.3-6.7 2.2 2.6 6.6 1.5 10 2.3 3.8.9 5.9 2.1 10.5 4.3s1.2.3 1.8.5Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient151)"/>
                                    <path d="M120.2 124.8c-3.7.9-7.6 1.9-10.1 4.7-.5.6-1 1.3-.8 2s.9 1.2 1.6 1.5c2.6 1.1 5.5 1.5 8.3 1.1.9-.1 2-.5 2.2-1.5.1-.9-.8-1.6-1.5-2.3-1.3-1.2-2.1-3 .3-5.5"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient152)"/>
                                    <path d="M140.3 133.8c-1.6-1.4-3.7-2-5.7-2.6-.6-.2-1.2-.3-1.8-.4s-1.2.1-1.7.6c-.4.4-.6.9-.5 1.4s.5.9 1 1c.9.2 1.6-.7 2.4-.9.9-.3 1.8 0 2.6.6s1.5 1.1 2.3 1.4 2.3 0 1.2-1Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient153)"/>
                                    <path d="M212.9 298.5 61.6 312.7c-1.2.2-2.1 1-2.4 2.2-.5 2 1.2 3.9 3.3 3.5L213 301.9v-3.3Z"
                                          style="fill:url(#New_swatch_26716)"/>
                                    <path d="M65.8 317.3s1.2.1 1.3.2c48.9 66.8 87.5 93.6 106.7 107.4 0 0 .5.7 0 .7-59.7-45-77.1-69.2-108-108.3"
                                          style="fill:url(#New_swatch_26448)"/>
                                    <path d="M114.8 365.8a72 72 0 0 0-.2 20.7l3.4-.9c-.5-7.1-.4-14.3.4-21.4-.8.9-1.9 1.5-3.6 1.5Z"
                                          style="fill:url(#New_swatch_25954)"/>
                                    <path d="M118.5 364.5c.6 0 1.4-.2 2-.2-.4 3.9-.6 7.9-.6 11.9 0 1.7 0 3.3.4 5 .1.7.3 1.4.3 2s-.4 1.4-1.2 1.7c-.7.3-1.8 0-1.9-.7-.4-6.6-.3-13 1.1-19.8Z"
                                          style="fill:url(#New_swatch_25955)"/>
                                    <path d="M129.1 360.8a72 72 0 0 0-.2 20.7l3.4-.9c-.5-7.1-.4-14.3.4-21.4-.8.9-1.9 1.5-3.6 1.5Z"
                                          style="fill:url(#New_swatch_25956)"/>
                                    <path d="M132.7 359.4c.6 0 1.4-.2 2-.2-.4 3.9-.6 7.9-.6 11.9 0 1.7 0 3.3.4 5 .1.7.3 1.4.3 2s-.4 1.4-1.2 1.7-1.8 0-1.9-.7c-.4-6.6-.3-13 1.1-19.8Z"
                                          style="fill:url(#New_swatch_25957)"/>
                                    <path d="M88.4 375.6c.8 0 3.4-.2 3.8 0 7-4.4 31.2-11.9 48.7-15.6-2.8-.8-5.7-1.2-8.7-1-1.7.5-3.3.9-5 1.4-6.8 1.9-13.6 3.8-20.1 6.3s-12.6 5.2-18.8 9Z"
                                          style="fill:url(#New_swatch_25958)"/>
                                    <path d="M88.4 375.6c15.3-6.9 31.5-12.3 48.2-16l.5-4.6c-17.2 3.1-32.4 8.8-48.1 15.8-.2.8-.9 2.5-.6 4.8"
                                          style="fill:url(#New_swatch_25959)"/>
                                    <path d="m137.1 355 4.3.3-.5 4.7-4.3-.4z" style="fill:url(#New_swatch_25960)"/>
                                    <path d="m159.1 177.2-81.9-4.9c-.4 0-.7-.2-1-.4-1-1-.2-2.7 1.2-2.6l86.1 6.3-4.4 1.7Z"
                                          style="fill:url(#New_swatch_26717)"/>
                                    <path d="M65.8 316.7c55.3-12.5 100.8-19.7 119.5-16.5 4.3.7 7.1 2 8.4 3.8 22.7-25.9 47.3-88.7-17.7-130.9 1 10.3-47.9 7.8-95.9-3.3 37.6 73.3-6.6 128.1-14.2 146.7v.2Z"
                                          class="st476"/>
                                    <path d="M110.5 223c-2.3-3.2-12.5-24.9-15.7-28.6 9.1 23.8 18.5 39.5 10.1 71.9-1.7 6.4-14.5 24.1-8.2 17.8 6.1-4.9 11.4-10.7 15.6-17.3 16.3 2.6 33.3.6 48.5-5.9 4.4-1.9 8.7-4.1 13.3-5.4s9.7-1.7 14.1.2c2.3 1 4.4 2.6 6.9 2.8 2.8.2 5.4-1.4 7.7-3 2.6-1.7 5.3-3.5 7.3-5.9 3.8-4.3 5.2-10.1 6.5-15.7 1.4-5.9 2.7-12.4-.3-17.6-3.1-5.4-9.6-7.5-14.9-10.8-8.4-5.2-14-13.7-19.4-22 1.7.4 1.7 3.1.3 4.1s-3.3.9-5 .7l-52.5-5.4c10.5 3.7 21.7 7.4 32.6 5.1-13.1 8.9-31.9 8.4-44.4-1.4 3.6 5.8 10.9 7.8 17.6 9.5 6.4 1.6 20.3 3.1 15.4 4.5-11.8 5.1-31.7 4.1-44.5-7.4 9.2 12.2 16.4 25.9 21.1 40.5-7.6-3-7.5-4.3-12.2-10.9Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient154)"/>
                                    <path d="M116.5 205.4c6.4.9 12.9 1.9 19.4 1.8s13.1-1.3 18.8-4.3c1.4-.7 2.9-1.9 2.9-3.5 0-1.5-1.4-2.6-2.8-3.1s-2.9-.7-4.1-1.6c4.5-2 9-4.1 13.5-6.1.6-.3 1.3-.6 2-.4s1.1.9 1.4 1.5c3.5 7.1 2.6 15.7-.6 23s-8.5 13.3-13.7 19.3c-7 8.1-14.5 16.5-24.5 20.3-3.6 1.3-8.2 1.8-10.7-1.1 4.7-5.3 9.5-10.7 11.9-17.4.7-2 1.2-4.3.8-6.4-1.5-7-11.9-9.1-14.2-22Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient155)"/>
                                    <path d="M65.8 316.7c55.3-12.5 100.8-19.7 119.5-16.5 1.7-.7 3.4-1.5 5.1-2.2l-3.6-31.7c-2.4-.9-4.9-1.7-7.5-2.2-4.3-.9-8.6-1.1-12.8-2.2s-8.4-3.4-10.5-7.1c-2.6.6-3.4 3.9-3.4 6.6s.3 5.8-1.6 7.6c-1.1 1-2.7 1.4-4.2 1.7-12.8 2.6-25.7 5.3-38.5 7.9-5.1 1-21 20.1-20.4 14.9.7-5.7 10-27.3 11-31-4 6.9-28.9 44.6-32.9 54.1v.2Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient156)"/>
                                    <path d="M129.7 382.9c28.7-2.7 58.3-3.1 86.3-3.1-1.4 16.3-.5 29.2 5.3 42.8-23.3-.9-46.8 1.2-69.4 6.2-3.7.8-8.2 1.6-10.9-.8-1.5-1.3-1.9-3.3-2.2-5.1-2.7-14.5-5.4-29-9.1-40"
                                          style="fill:url(#New_swatch_26327)"/>
                                    <path d="M129.7 382.9c28.7-2.7 58.2-3.1 86.3-3.1-1.4 16.3-.5 29.2 5.3 42.8-23.3-.9-46.8 1.2-69.4 6.2-3.7.8-8.2 1.6-10.9-.8-1.5-1.3-1.9-3.3-2.2-5.1-2.7-14.5-5.4-29-9.1-40"
                                          class="st135"/>
                                    <path d="M142.3 400.1c-18.8 3.1-36.5 7.8-53.9 13.1v-.7c-.3-5.2-.6-10.4-.8-15.6v-1.1c-.1-2.4-.3-4.8-.4-7.2 14.5-1.2 28.8-5 41.5-11.2q-.75 3.9.3 7.8a22.67 22.67 0 0 0 13.5 14.9Z"
                                          style="fill:url(#New_swatch_26328)"/>
                                    <path d="M140.4 397c-.9.2-1.7.4-2.6.7a589 589 0 0 0-49.5 14.9c-.3-5.2-.6-10.4-.8-15.6 1.5-.8 3.1-1.4 4.7-2 1.5-.6 3-1 4.6-1.5-.3.3-.6.5-1 .8-2 1.6-4.4 2.9-6.9 3.9 10.2-1.2 20.1-3.7 29.5-7.3-1.9.4-3.9.9-5.8 1.3.3-.1.5-.3.8-.4-3.3.4-6.5.9-9.8 1.3.7-.2 1.4-.4 2.2-.7 6.9-2.1 13.7-4.3 20.6-6.4.8-.3 1.6-.5 2.5-.8 1-.4 2-.7 3-1.2.8-.4 1.5-.8 2.2-1.3.6 5.2 2.8 10.2 6.4 14.3Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient157)"/>
                                    <path d="M133.7 387.3c-1.3.2-4.2-2.4-5.6-2.3-18.3 1.6-39 8.8-40.8 9.1-.1-2.4-.2-3.1-.3-5.5 14.5-1.2 28.8-5 41.5-11.2q-.75 3.9.3 7.8c1-.4 2-.7 3-1.2.5 1.1 1.1 2.2 1.9 3.3"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient158)"/>
                                    <path d="M211.3 379.8h7.8c0 13.4 2.6 25.1 6.4 27.6-4.3 1.7-4.6 21.4-8.1 18.7-1.3-1 .7-23.3-.9-23.9-6.9-2.5-5.3-22.3-5.3-22.3Z"
                                          class="st408"/>
                                    <path d="M173.7 397s83.3 1.3 84.3.8c-6.6 8.7-15.5 15.7-24.5 22.7s-20 12.4-32 13.8-25-1.6-33.3-9.1-11-19.8 5.5-28.1Z"
                                          style="fill:url(#New_swatch_26329)"/>
                                    <path d="M249.1 406.4c-27-1.3-61.4-3-88.3-.5 27 1.9 54 3.9 81.1 5.8-2.8 1.2-5.3 3-7.1 5.2-6.8-2.1-14-2.5-21.2-2.9-17.9-1-35.8-1.8-53.7-2.5 5.7 1.8 7.5 8 12.1 11.5 3.3 2.5 7.9 3.5 12.3 4 13.3 1.7 26.9 1.1 40.4.4 2.9-.1 5.8-.3 8.3-1.6 1.6-.8 3-2.1 4-3.4 4.7-5.8 12.9-12.7 12.2-16Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient159)"/>
                                    <path d="M194.1 20.2 216 431.8l21 12.3-39.3-424.2z"
                                          style="fill:url(#New_swatch_26330)"/>
                                    <path d="M185.6 433c-27 1.4-61 4.3-95 4.1-.2-.8-.3-1.8-.5-2.7-.5-3.4-.9-7.4-1.2-10.9v-1.8c-.3-3.3-.4-6.1-.5-7.3v-.2c23.5-5.5 45.6-9.9 69.2-13.7 2.3-.4 4.7-.8 7.1-1.1v5.4c0 .6.1 1.2.2 1.9v.6c0 .4 0 .8.1 1.2v.3c0 .3.1.6.1.9v.9c.2 1.4.4 2.7.8 4.1 0 .1 0 .3.1.4l.3 1.2q.6 1.95 1.5 3.9c1.4 3 3.5 5.8 6.2 8.1 3.2 2.7 7.1 4.5 11.5 4.9Z"
                                          style="fill:url(#New_swatch_26331)"/>
                                    <path d="M187 425.8c-4.3.9-8.6 1.6-12.9 2.2-9.3 1.2-18.8 1.9-28.2 2.5-18.6 1.3-37.2 2.5-55.8 3.8-.5-3.4-.9-7.4-1.2-10.9 2.4-.5 6.5-1.2 10.4-1.9 3.5-.6 6.9-1.2 9.1-1.6-.9.4-2.4 1-4.1 1.5-3.6 1.2-8.2 2.5-10.1 3.4 14.1-.3 28.1-1.7 41.8-4.2h-11.6c.3 0 .7-.2 1-.2l39.9-9.9 5-1.2c2.3-.6.5 0 2.8-.5 1.5 6.7 5.1 15.6 14 17.2Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient160)"/>
                                    <path d="M174.1 414.9c-2.3.4-1.2 2.8-3.9 3.3-11.2 1.7-28.2 1.5-27.4 1.3-3.7.3-7.3.7-11 1.1-6 .7-12.1 1.6-18.1 2.6-5.3.5-10.7.6-16 .3-1.2 0-2.5-.2-3.7-.3-.9 0-1.7-.2-2.5-.3l-2.7-.3v-.2c.5 0 .9-.2 1.4-.3 5.9-1.1 11.8-2.1 17.6-3 2.8-.4 5.5-.8 8.2-1.1 9.6-1.2 19.1-2 28.5-2.6q9.45-.45 18.9-.6h10.7Z"
                                          class="st97"/>
                                    <path d="M173 416c-2.5.6-5.7 1.1-9.4 1.5-8.2 1-19.2 1.9-32.5 3-21.5 1.9-38.8 2.8-42.3 2.8v-1.2c0-.8-.1-1.6-.2-2.5-.2-2.6-.3-4.9-.3-5.7 23.5-5.5 45.6-9.9 69.2-13.7 2.3-.4 4.7-.8 7.1-1.1v1.8c0 1.3 0 2.5.2 3.7 0 1.2.2 2.4.3 3.6v.3l.3 1.7 5-1.2v4.1c-1.5.5 3.3 2.7 2.9 2.8Z"
                                          style="fill:url(#New_swatch_26332)"/>
                                    <path d="M170.2 409.1v4.1c-1.3.4 7 2.8 5.5 3.1-8.6 1.9-24.4 2.4-44.5 4.2-21.5 1.9-38.8 2.8-42.3 2.8 0-1.2-.2-2.4-.3-3.6 11 .5 22.1-.4 32.8-2.7-5.6.1-11.3.2-16.9.4 13.9-.8 27.7-3.1 41-6.7-3.4 2.1-7.3 3.4-11.4 4 10.6-.3 21.2-2.3 30.9-6.1 0 .6.1 1.1.2 1.7z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient161)"/>
                                    <path d="M169 413c-.2.9-4.8 3.9-5.4 4.5-8.2 1-19.2 1.9-32.5 3-21.5 1.9-38.8 2.8-42.3 2.8v-1.2c16.4-2.6 19.7-.5 29.5-1.2 16-.6 51.1-9.4 50.8-8Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient162)"/>
                                    <path d="M164.5 401c-45.9 9.9-62.2 14.2-75.9 14.7-.4-4.3-.3-.4-.3-1.7 23.5-5.5 45.6-9.9 69.2-13.7l7.1-.6h.5c-.2.2-.3 1.3-.5 1.4Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient163)"/>
                                    <path d="M130.7 381.6c-.9.1-1.9.3-2.8.5l-5.5 1.2c-12.8 3.1-25.7 8.1-36.5 10.2l.3-6.2c0-.9 0-1.8.1-2.8 15.6-3 24.8-9 43.9-12-.3 2.9-.2 5.9.4 8.8v.2Z"
                                          style="fill:url(#New_swatch_27728)"/>
                                    <path d="M130.1 392.9c.6 1.8 1.3 3.6 2.6 4.5s2.9.4 4.4-.3c1.4-.7 2.8-2.5 4.3-2.5-3.1-1.2-4.6-.5-5-3.9-.3-2.6-.5-7.2-.6-11.4-1.7.1-3-1.2-2.6-2.6.3-.9 1.1-1.5 2.2-1.6h.3v-2l-5.8-.5c-1.3 8.2-1.5 14.4.4 20.2Z"
                                          style="fill:url(#New_swatch_27729)"/>
                                    <path d="M130.1 392.9c.6 1.8 1.3 3.6 2.6 4.5s2.9.4 4.4-.3c1.4-.7 2.8-2.5 4.3-2.5-3.1-1.2-4.6-.5-5-3.9-.3-2.6-.5-7.2-.6-11.4-1.7.1-3-1.2-2.6-2.6.3-.9 1.1-1.5 2.2-1.6h.3v-2l-5.8-.5c-1.3 8.2-1.5 14.4.4 20.2Z"
                                          class="st269"/>
                                    <path d="M140.2 394.8c-1.9 1.1-4.1 2-6.4 2.2s-1.8 1.9-4.1 1.6c-3.6-.6-5.5-1.7-6.3-3.5-.6-1.3-.8-4.9-1-11.7V381c0-1.2 0-2.6-.1-4v-2.6l8.2-1.7c.1 3.2.2 6.2.4 8.8v.2c.2 3.6.5 6.5.8 8.7.4 2.1.8 3.4 1.5 3.8.3.2.7.4 1.1.6.3.1.6.2 1 .3 1.9.4 3.9 0 5.2-.2Z"
                                          style="fill:url(#New_swatch_27730)"/>
                                    <path d="M123.4 399.7c.6-1.2 1.4-1.8 1.7-2.8 7.3-1.6 14.6-3.2 22.1-3.6-8.2 1.6-15.4 4.4-23.7 6.4Z"
                                          style="fill:url(#New_swatch_27731)"/>
                                    <path d="M170 393.2c-.3 1.2-.7 2.5-.9 4.6l-6 1.5c-1.9.5-3.8.9-5.6 1.4-40.4 9.9-64.2 15.2-71.6 14.1v-7.4c13.9 0 35.5-10 83.4-19.9 1.4 2.6 1.2 3.9.7 5.7"
                                          style="fill:url(#New_swatch_27732)"/>
                                    <path d="M189.7 429.5c-2.7 1.3-1.1 2.2-3.1 4l-.1.1c-4.8-1.3-6.1-3.6-9.6-4.1-.9-.1-1.9-.1-3.1 0-12.9 1.5-15.7-16.3-16.2-29 0-2.3-.1-4.3 0-6.1v-4.2l11.8-2.8c.1 1.9.3 3.8.7 5.7 1.2 6.3 3.5 12.4 5.8 18.3 2.4 6.1 4.2 12.3 9.4 15.9 1.3.9 2.7 1.6 4.4 2.1Z"
                                          style="fill:url(#New_swatch_27733)"/>
                                    <path d="M187.8 438.9c-4.1-2.7-5.9-10.1-11-9.3-7.3 1.2-11.1-16.1-12.7-25.2.9-1 1.8-2.1 2.7-3.1-1-.2-3.4.5-3.3 0 0 0-.7-6.1-.5-8.6-11.8 2-14.1 1.9-39.7 8.9-11.6 3.2-25.5 7.8-37.5 6.4v-.6c13.9 0 35.5-10 83.4-19.9 1.4 2.6 1.2 3.9.7 5.7 1.2 6.3 3.5 12.4 5.8 18.3 2.4 6.1 4.2 12.3 9.4 15.9.4 2 .8 4.1 1.3 6.1l1.2 5.4Z"
                                          class="st45"/>
                                    <path d="m153.4 407.1 2 7.2c.2.6-.1 1.2-.7 1.4-.5.2-1.1 0-1.3-.6-.6-1.3-1.8-5.2-2.6-7.1.7-.4 1.4-.8 2.6-.9"
                                          style="fill:url(#New_swatch_19611)"/>
                                    <path d="m147 408.8 2.2 6.2c.2.6-.1 1.2-.7 1.4-.5.2-1.1 0-1.3-.6-.6-1.3-2-4.2-2.8-6 .7-.4 1.4-.8 2.6-.9Z"
                                          style="fill:url(#New_swatch_19612)"/>
                                    <path d="m140.3 410.3 1.8 6.2c.2.6-.1 1.2-.7 1.4-.5.2-1.1 0-1.3-.6-.6-1.3-1.6-4.2-2.4-6 .7-.4 1.4-.8 2.6-.9Z"
                                          style="fill:url(#New_swatch_19613)"/>
                                    <path d="m133.6 411.9 1.9 5.7c.2.6-.1 1.2-.7 1.4-.5.2-1.1 0-1.3-.6-.6-1.3-1.7-3.7-2.5-5.6.7-.4 1.4-.8 2.6-.9"
                                          style="fill:url(#New_swatch_19614)"/>
                                    <path d="m154.8 404.8-27.4 5.8 1.2 3.5 27.8-5.9z"
                                          style="fill:url(#New_swatch_2729)"/>
                                    <path d="m158.4 403.1-3.3 2.4 1.3 2.7 3.2-2.3z"
                                          style="fill:url(#New_swatch_27210)"/>
                                    <path d="m158.4 403.1-3.3 2.4 1.3 2.7 3.2-2.3z"
                                          style="mix-blend-mode:multiply;fill:url(#New_swatch_27211)"/>
                                    <path d="m127.4 410.4 3-1.4 28-5.9-3.3 2.4z"
                                          style="fill:url(#New_swatch_27212)"/>
                                    <path d="M199.6 123.6 152.3 405l-1 .5 48.2-285.1z"
                                          style="fill:url(#New_swatch_12811)"/>
                                    <path d="m199.6 123.6-53.9 282.8-1 .5 54.8-286.5z"
                                          style="fill:url(#New_swatch_12812)"/>
                                    <path d="m153 405.4.5-4.3-2.1.2-1.3 4.8c.9-.2 1.8-.3 2.8-.7Z"
                                          style="fill:url(#New_swatch_26718)"/>
                                    <path d="m146.4 406.6.7-4.3-2.1.2-1.4 4.8c.9-.2 1.8-.3 2.8-.7"
                                          style="fill:url(#New_swatch_26719)"/>
                                    <path d="m199.6 123.6-60.3 283.9-.9.5 61.1-287.6z"
                                          style="fill:url(#New_swatch_12813)"/>
                                    <path d="m140 407.7.7-4.3-2.1.2-1.4 4.8c.9-.2 1.8-.3 2.8-.7"
                                          style="fill:url(#New_swatch_26720)"/>
                                    <path d="m199.7 123.7-67.1 284.6-.9.5 67.9-288.3z"
                                          style="fill:url(#New_swatch_12814)"/>
                                    <ellipse cx="156.4" cy="303.6" rx="1.5" ry="1.6"
                                             style="fill:url(#New_swatch_26449)"
                                             transform="rotate(-13.5 155.63 302.86)"/>
                                    <ellipse cx="160.7" cy="303.7" rx="1.5" ry="1.6"
                                             style="fill:url(#New_swatch_26450)"
                                             transform="rotate(-13.5 160.33 302.98)"/>
                                    <ellipse cx="164.8" cy="303.7" rx="1.5" ry="1.6"
                                             style="fill:url(#New_swatch_26451)"
                                             transform="rotate(-13.5 164.18 303.01)"/>
                                    <ellipse cx="169.2" cy="303.7" rx="1.5" ry="1.6"
                                             style="fill:url(#New_swatch_26452)"
                                             transform="rotate(-13.5 168.46 303.09)"/>
                                    <circle cx="178" cy="212.9" r=".8" style="fill:url(#New_swatch_26453)"/>
                                    <circle cx="180.1" cy="213.3" r=".8" style="fill:url(#New_swatch_26454)"/>
                                    <circle cx="182.1" cy="213.7" r=".8" style="fill:url(#New_swatch_26455)"/>
                                    <circle cx="184.2" cy="214" r=".8" style="fill:url(#New_swatch_26456)"/>
                                    <path d="m133.3 408.6.9-4.3-2.1.2-1.6 4.8c.9-.2 1.8-.3 2.8-.7"
                                          style="fill:url(#New_swatch_26721)"/>
                                    <path d="M169.3 387.5c-.6 8.6 0 30.4 6.2 37.1 5 5.4 13.6 5.1 20.8 8.2l5.6-4.4c-3.3-1.6-15.6-2.9-18.6-4.9-7.6-4.9-8-27.6-7.4-34.6l-6.5-1.5Z"
                                          style="fill:url(#New_swatch_27734)"/>
                                    <path d="M169.3 387.5c-.6 8.6 0 30.4 6.2 37.1 5 5.4 13.6 5.1 20.8 8.2l5.6-4.4c-3.3-1.6-15.6-2.9-18.6-4.9-7.6-4.9-8-27.6-7.4-34.6l-6.5-1.5Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient164)"/>
                                    <path d="M167.5 428.6s5.7-1.5 11.5-1.6c9.6-.3 19.3 0 28.9 1-34.3 4.4-40.4.7-40.4.7Z"
                                          style="fill:url(#New_swatch_27735)"/>
                                    <path d="m130.3 505.2-32.7-.2c.8-5.5 1.3-11 1.3-16.5 2.3-.6 4.5-1.2 6.8-1.9.3-4.1.5-8.1.6-12.2v-.1c0-3.8 0-7.5-.1-11.3 4.1-1.3 7.8 1.4 10.2 4.5 2.4 3.2 3.7 6.8 4.9 10.4.2.7.5 1.4.7 2.1 1.3 3.9 2.6 7.7 3.5 11.6.2.7.4 1.5.5 2.2q.6 2.55.9 5.1c.3 2.4.8 5.2 3.4 6.1Z"
                                          style="fill:url(#New_swatch_26333)"/>
                                    <path d="M102.6 467.1c9.1 16.8 12.2 22.6 15.3 38.1 16.6 2.3 35.6 2.6 52.4 1.5-20.3-12.1-42.9-24.5-67.7-39.6"
                                          style="fill:url(#New_swatch_26457)"/>
                                    <path d="M223 512c-11.8-.8-23.7-1.5-35.5-2.3l-69.6-4.5c0-6.5-1.2-13-3.4-19.2-1.1-3.1-2.4-6.1-4-9.1-1-1.9-2.2-3.8-3.4-5.6 4 1 6 2 8.1 3.1 2 1.3 4.1 2.5 6.3 3.7 13.7 7.1 29.9 11 45.5 15.2 1.3.4 2.6.7 3.9 1.1 17.7 5 34.9 11.3 52.1 17.5Z"
                                          style="fill:url(#New_swatch_26334)"/>
                                    <path d="M128.8 502.8c1.1-1.2 1-3 0-4.4-.9-1.4-2.3-2.4-3.7-3.4-3.8-2.8-7.4-5.8-10.8-8.9-1.1-3.1-2.4-6.1-4-9.1 3.6.2 7.3.6 11 1.2 15.1 2.3 31.1 7.5 45.5 15.2 2.6 1.4 5.2 2.9 7.7 4.5 5.1 3.2 10.1 7.1 12.8 11.9l-69.6-4.5c2.2-.3 4.4-.5 6.6-.8 1.6-.2 3.3-.6 4.3-1.6Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient165)"/>
                                    <path d="M193.7 506.3c-8.9.9-18 1.1-26.9.3-6-.5-11.9-1.4-17.6-2.9-8.3-2.1-16.3-5.4-23.2-9.7-5.1-3.2-9.7-7-13.4-11.4q-3.6-3.9-6.3-8.1c-6.3-10-9.2-21.6-8-33q.3-2.7.9-5.4c4.4 5.2 8.4 10.7 12.4 16 1.7 2.3 3.4 4.5 5.2 6.7.6.7 1.1 1.4 1.7 2 3.6 4.4 7.5 8.6 11.9 12.3 5.5 4.6 11.6 8.5 18 12.2 6.4 3.6 13 6.9 19.5 10.3 2.6 1.4 5.2 2.8 7.7 4.2 1 .6 1.9 1.1 2.9 1.7 4.8 2.7 9.8 5.1 15.4 4.8Z"
                                          style="fill:url(#New_swatch_26458)"/>
                                    <path d="m433.1 359.3-3.4 15.2-3.3 14.8c-.8 3.7-1.7 7.4-2.5 11.2-1.7 7.6-4.1 26.1-4.4 27.8-4.3 18.6-7.4 19.8-7.8 21.1q-1.05 2.85-2.4 5.7a68 68 0 0 1-9.9 15.8c-1.2 1.4-4.3 4.7-4.3 4.7l.7.2s-16.5 14.3-30.1 20.1c-16.5 7-40.6 8.4-58.6 11.3 22.1-9.4 51.7-15.8 66.6-32.5.3-.3.5-.6.7-.8.2-.3.5-.6.7-.9.9-1.1 1.8-2.3 2.7-3.4.3-.5.7-.9 1-1.4 3.9-5.5 7-11.4 9.7-17.5.8-1.7 1.5-3.4 2.2-5.1.3-.6.5-1.2.8-1.8 2.6-6.2 5.1-12.5 7.3-18.9.8-2.2 1.5-4.4 2.2-6.6 2.2-7 4-14 5.4-21.1.2-1 .4-1.9.5-2.9.8-4.7 1.4-9.3 1.7-14 .3-4 .3-8.1.2-12.1 7.5-2.1 15-4.2 24.5-8.9Z"
                                          style="fill:url(#New_swatch_26335)"/>
                                    <path d="M417.9 360.9q-1.95 5.4-3.3 10.8c-3.1 11.5-4.8 23.3-6.7 35-.8 4.8-1.5 9.6-2.4 14.4-.6 3.2-1.2 6.5-2 9.7v.3c-.8 3.5-1.7 7.1-2.7 10.6v.2c-.4 1.5-.9 2.9-1.4 4.4-.5 1.4-.9 2.7-1.4 4 0 .2-.1.4-.2.6 0 .2-.2.4-.2.7l-.9 2.4c-.1.4-.3.7-.5 1.1A92 92 0 0 1 387 472c-.2.2-.3.5-.5.7l-.6.9c-1.2 1.6-2.4 3.2-3.7 4.8-10.4 12.4-24.6 18.3-40.2 22.5-5.3 1.4-10.7 2.6-16.2 3.8-10.2 1.4-19.8 2.6-29 3.5-5.6.6-10.9 1.1-16.1 1.5-16.3 1.4-30.9 2.1-43.9 2.2-11.7.1-22.1-.1-31.5-.7-5.6-.3-10.9-.8-15.8-1.3-1.5-.2-2.9-.3-4.3-.5a263 263 0 0 1-18-2.9c-21-4.3-31.3-9.9-35.7-12-2-.9-3.9-1.9-5.6-2.9-4.9-2.8-8.9-5.7-12.2-8.9-.9-.9-1.8-1.8-2.6-2.7-.9-1-1.7-2-2.5-3.1-.2-.2-.3-.4-.4-.6-.1-.1-.2-.3-.3-.4-.1-.2-.2-.4-.4-.5-.2-.3-.4-.7-.7-1-.1-.2-.2-.4-.4-.6 0-.1-.2-.3-.2-.4-.1-.2-.2-.4-.3-.5 0-.1-.2-.3-.2-.4 0 0 0-.1-.1-.2-.1-.2-.3-.5-.4-.7 0 0 0-.2-.1-.3v-.4c-.2-.4-.3-.7-.5-1.1 0-.2-.1-.3-.2-.4 0 0 0-.2-.1-.2 0-.2-.1-.3-.2-.5 0-.2-.2-.4-.3-.6v-.1c0-.2-.1-.3-.2-.5v-.1c0-.2-.1-.3-.2-.5v-.2c0-.2-.1-.3-.2-.5 0-.2-.1-.4-.2-.5v-.1c0-.1 0-.3-.1-.4 0-.1 0-.3-.1-.4 0-.2-.1-.4-.2-.5v-.3c0-.2 0-.3-.1-.5 0-.2-.1-.4-.2-.6s-.1-.4-.2-.6c0-.2-.1-.5-.2-.7 0-.4-.2-.7-.3-1.1-.2-.7-.3-1.3-.4-2 0-.2 0-.4-.1-.6v-.4c0-.2 0-.5-.1-.7v-.6c0-.5-.2-1.1-.3-1.6v-1.3c0-.4 0-.8-.1-1.1v-1.5c0-.5 0-1-.1-1.6v-14.4c0-.5 1.9-.8 4.6-1 4.3-.3 10.4-.3 14.1 0 5.4.6 10.6 1 15.7 1.3 4.7.3 9.3.5 13.8.7 16 .8 32.1 1.5 47.9-1 2.6-.4 5.3-.9 7.9-1.5 3.8-.9 7.6-2.1 11.3-3.4 3.6-1.4 7-2.9 10.2-4.8a54 54 0 0 0 7.8-5.4c1.5-1.2 2.9-2.6 4.2-3.9 7-7.4 9.6-17.2 8.8-26.6-.3-4.2-.3-8.3-2.6-12A847.13 847.13 0 0 1 420 361.3h.2Z"
                                          style="fill:url(#New_swatch_26336)"/>
                                    <path d="m387.6 471.8-1.9 1.9c-12.2 11.6-27.4 20.5-43.9 27.3-5.3 1.4-10.7 2.6-16.2 3.8-140.1 19.4-183.9-5.2-194.4-10.2-9.1-4.3-15.7-9.1-20.5-14.5 21.2 8.6 43.9 14.5 67.1 17.2-5.5-1.7-10.9-3.4-16.4-5 16 1.7 32 3.4 48 5.2a83 83 0 0 1-39.9 3.3c18.6 4.1 38.2 4.9 57.2 2.4-4.8-.7-9.7-1.3-14.5-2 26.5-3.2 53.2-5.7 79.9-7.4-3.1 1.3-6.2 2.7-9.3 4 15.5.4 31.1-1.5 45.9-5.6-12.3 7.5-27.2 12-42.3 12.7 19.6-.1 39.1-6.1 54.3-16.6-12 2.1-24.3 2.9-36.6 2.4 28.4-3 56.3-9.2 82.7-18.5.3 0 .5-.2.8-.3Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient166)"/>
                                    <path d="M114.5 477.6c30.4 10 63.3 14.3 95.7 12.6-2.4.5-14.8 1.2-17.2 1.7 19.5 1.9 38.4 4.7 58 4.2 19.6-.6 32.7-4.6 50.2-12.2-2.2 1.3 16.1 1.7 15.8 1.5 23.2-2.5 42.8-3.2 61.6-15.3-88.2 7.1-176.7 10.8-264.2 7.4Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient167)"/>
                                    <path d="M411.6 449.4q-1.05 2.85-2.4 5.7a68 68 0 0 1-9.9 15.8l-6.1.9c-2.3.3-4.6.7-6.9 1l-3.8.6-2.2.3c-.3 0-.6 0-.9.1-2 .3-4 .4-5.9.9-2.4.6-4.7 1.2-7 1.8-.6.2-1.2.3-1.9.5s-1.5.4-2.2.5c-.7.2-1.3.3-2 .5-4.3 1-8.6 2-12.8 2.9-.7.1-1.3.3-2 .4-.4 0-.8.2-1.3.3-.5 0-.9.2-1.4.3l-1.6.3c-.5 0-1 .2-1.5.3l-1.7.3c-.5 0-1 .2-1.5.3-.9.2-1.7.3-2.6.5-.4 0-.9.2-1.3.3-.3 0-.6.1-.9.2-1.3.2-2.6.5-3.9.7-.5 0-.9.2-1.4.2-.8.1-1.7.3-2.5.4-.5 0-1.1.2-1.6.3-.2 0-.4 0-.7.1-.5 0-1 .2-1.4.2h-.3l-1.8.3c-.6 0-1.1.2-1.7.3-.3 0-.5 0-.8.1-.5 0-.9.1-1.4.2l-3.9.6c-1.8.3-3.5.5-5.3.7-.3 0-.7 0-1 .1-.4 0-.7 0-1.1.1l-2.6.3c-.4 0-.9.1-1.3.2-1.4.2-2.8.3-4.2.5-.6 0-1.3.2-1.9.2-2.1.2-4.1.5-6.2.7-.4 0-.9 0-1.3.1h-.3c-.6 0-1.2.1-1.8.2-.6 0-1.1.1-1.7.2-.4 0-.9 0-1.3.1-.4 0-.8 0-1.1.1-.6 0-1.1.1-1.7.2-.6 0-1.1.1-1.7.1s-1.1 0-1.7.1c-.5 0-1 0-1.5.1h-1.9c-.4 0-.9 0-1.3.1-.5 0-1 0-1.5.1-.6 0-1.2 0-1.8.1-.7 0-1.4 0-2.1.1-.7 0-1.3 0-2 .1-.7 0-1.3 0-2 .1l-5.9.3h-5.9q-9.15.45-18.3.3h-14.4c-1.6 0-3.1-.1-4.7-.2H207c-.7 0-1.5-.1-2.2-.2-.8 0-1.7-.1-2.5-.2-.7 0-1.4-.1-2.1-.2-.4 0-.9 0-1.3-.1-.5 0-.9 0-1.4-.1h-2.1c-1.1 0-2.2-.2-3.3-.3-.5 0-1.1-.1-1.6-.2-.5 0-1.1-.1-1.6-.2-.5 0-1-.1-1.5-.2-1.3-.1-2.6-.3-3.9-.4l-4.9-.6c-.3 0-.6 0-.9-.1h-.2c-1.7-.2-3.4-.4-5-.7-.4 0-.7 0-1.1-.1-.3 0-.6 0-.9-.1h-.5q-7.8-1.05-15.6-2.4l-2-.3-2-.3-2-.3h-.3c-1.9-.3-3.9-.7-5.8-1.1-.5 0-1-.2-1.5-.3-.7-.1-1.4-.3-2.1-.4-.6-.1-1.3-.2-1.9-.4-1.3-.2-2.6-.5-3.9-.8-.6-.1-1.3-.3-1.9-.4l-1.6-.3c-.2 0-.5 0-.7-.1-1.1-.2-2.3-.5-3.4-.7s-2.3-.5-3.4-.7c-1-.2-2-.4-3-.7-.7-.2-1.4-.3-2.1-.4-.4 0-.7-.2-1.1-.2-.7-.2-1.4-.3-2.1-.5l-2.5-.6c-1-.2-1.9-.4-2.9-.7-.2-.2-.3-.4-.4-.6-.1-.1-.2-.3-.3-.4-.1-.2-.2-.4-.4-.5-.2-.3-.4-.7-.7-1-.1-.2-.2-.4-.4-.6 0-.1-.2-.3-.2-.4-.1-.2-.2-.4-.3-.5 0-.1-.2-.3-.2-.4 0 0 0-.1-.1-.2-.1-.2-.3-.5-.4-.7 0 0 0-.2-.1-.3v-.4c-.2-.4-.3-.7-.5-1.1 0-.2-.1-.3-.2-.4 0 0 0-.2-.1-.2 0-.2-.1-.3-.2-.5 0-.2-.2-.4-.3-.6v-.1c0-.2-.1-.3-.2-.5v-.1c0-.2-.1-.3-.2-.5v-.2c0-.2-.1-.3-.2-.5 0-.2-.1-.4-.2-.5v-.1c0-.1 0-.3-.1-.4 0-.1 0-.3-.1-.4 0-.2-.1-.4-.2-.5v-.3c0-.2 0-.3-.1-.5 0-.2-.1-.4-.2-.6s-.1-.4-.2-.6c0-.2-.1-.5-.2-.7 0-.4-.2-.7-.3-1.1-.2-.7-.3-1.3-.4-2 0-.2 0-.4-.1-.6v-.4c0-.2 0-.5-.1-.7v-.6c0-.5-.2-1.1-.3-1.6v-1.3c0-.4 0-.8-.1-1.1V451c0-.5 0-1-.1-1.6V435c2.4-.1 4.9-.3 7.3-.4 3.8-.2 7.6-.4 11.4-.5 18.5-.8 36.9-1 55.4-1 10 0 19.9.2 29.9.5 20.4.5 40.8 1.4 61.2 2.6 18.5 1.1 37.1 2.4 55.6 3.9.5 0 1 0 1.5.1 1 0 2 .2 3 .2l14.8 1.2 20.4 1.8c10.7.9 21.4 1.9 32.1 2.9l6.2.6c.8 0 1.6.1 2.4.2.7 0 1.5.1 2.2.2 1.6.1 3.2.3 4.8.4 2.1.2 4.5.6 5.3 2.2Z"
                                          style="fill:url(#New_swatch_26337)"/>
                                    <path d="M409.6 449.4c-2.1 7.3-8.7 15.8-16.4 22.4-2.3.3-4.6.7-6.9 1l-3.8.6-2.2.3c-.3 0-.6 0-.9.1-2 .3-4 .4-5.9.9a568 568 0 0 1-69.3 13.6c-.4 0-.7 0-1.1.1-18.1 2.4-36.3 3.9-54.9 4.7-46.8 2-95-5.7-140.2-16.1-.4-.5-.8-1-1.1-1.6-1.5-2.3-2.8-4.7-3.9-7.1 12.1 5.3 21.9 7.6 32.8 9-4.4-.8-22.8-8.9-23.2-9.1.5 0 36.6 6.2 55.3 4.8-3.6.8-5.9 3.4-9.6 4.1 18.6 4.2 46.4 6.3 65.6 5.1-8.3.1-33.5-3.3-41.1-6.3 22.4 3.9 89.4.7 108.1-2.2-1.5 2.1-27.6 6.9-29.1 9 12 1.8 24.8-2.3 36.7-4.6 9.5-2.7 19-5.3 28.5-8-10.2 0-20.3-.2-30.5-.3 22.8-2.7 45.3-7 67.3-13-6.6 2.3-13.2 4.7-19.7 7 2.9.8 7.1 1.4 10 2.2-3.5 3.1-18.8 5.2-22.2 8.3 22.4-3.8 60.8-17.3 77.6-25.1Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient168)"/>
                                    <path d="m304.2 488.3 77.5-15.3c-.5.2-1 .5-1.5.7-.3 0-.6 0-.9.1-2 .3-4 .4-5.9.9a568 568 0 0 1-69.3 13.6Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient169)"/>
                                    <path d="M305.6 485.7c-.8.9-1.6 1.8-2.5 2.7-18.1 2.4-36.3 3.9-54.9 4.7-46.8 2-95-5.7-140.2-16.1-.4-.5-.8-1-1.1-1.6 14.9 2.1 29.8 4.1 44.8 6.2 24.1 6.9 49.4 10.5 74.8 10.5-2.5-.5-4.9-1-7.4-1.6 28.9-.6 57.7-2.3 86.5-4.9Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient170)"/>
                                    <path d="M272.3 466.2s-18.6-.2-42.9 1.8c-10.7.9-21.3 2.4-32 2.6-18.2.4-36.2-2.9-54-6.2h2.2c-3.2-.6-6.4-1.1-9.6-1.7 86.6 5.9 173-14.5 259.7-14.5-57.7 15.3-80.9 14.7-123.4 18"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient171)"/>
                                    <path d="M411.6 449.4c-.6 1.5-2.5 5.7-2.5 5.7l.6.2s-3.4 5.5-5.1 8.2c-1.6 2.6-3.5 5.1-5.4 7.4-1 1.2-2.1 2.4-3.2 3.6-.4.4-.7.8-1.1 1.2-4.4-.9-8.9-1.5-13.4-1.8h-7.3c-3.5.1-6.9.4-10.3.9 6.1-2.4 10-3.9 13.8-5.2.2 0 .5-.2.7-.3 0-.4.2-.7.2-1.1 1.5-6.9 3.1-12.7 6.8-17.6 1.4-1.8 3.1-3.5 5.1-4.9 3.6-2.6 8.1-4.1 12.7-3.8 3.6.3 8.8 6.4 8.3 7.6Z"
                                          style="fill:url(#New_swatch_26338)"/>
                                    <path d="M396.1 474.5c-.4.4-.7.8-1.1 1.2-4.4-.9-8.9-1.5-13.4-1.8 4.8-.9 9.9-.7 14.6.6Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient172)"/>
                                    <path d="M419.5 428.3h.6c-3.5 15.4-8 20.1-9.7 24.3-.4.8-.7 1.7-1.1 2.5-4.9-1.9-9.6-3-13.6-3.6-5.6-.9-9.6-.9-10.2-.9-1.8 0-3.6 0-5.4.1 5.8-11.4 7-17.4 9.9-22.8.7-1.3 1.5-2.5 2.5-3.7 2.2-2.6 5-4.9 8.4-6 1.5-.5 3-.8 4.6-.8 4.2 0 9.9 1.9 13.5 3.8.6.3.5 7 .5 7Z"
                                          style="fill:url(#New_swatch_26339)"/>
                                    <path d="M410.3 452.6c-.4.8-.7 1.7-1.1 2.5-4.9-1.9-9.6-3-13.6-3.6-1.1-.6-1.8-1.1-2.1-1.3 5.7 0 11.4.8 16.8 2.4"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient173)"/>
                                    <path d="M426.4 389.3c-.8 3.5-2.1 10.6-2.1 10.6l3.1.4c-1.7 7.5-4.9 25.4-8 28.1-3.3-.7-8.4-1.6-11.8-2.1-3-.5-6-.9-9-1.3-2.1-.2-4.1-.5-6.2-.6a142 142 0 0 0-9.2-.6c10.8-13.3 14.6-21.2 20.4-26.7.5-.5 1.1-1 1.6-1.4s1-.8 1.5-1.1c5.5-3.9 12.9-6 19.7-5Z"
                                          style="fill:url(#New_swatch_26340)"/>
                                    <path d="M419.5 428.3c-3.3-.7-8.4-1.6-11.8-2.1-1.3-.5-2.5-1.2-3.7-1.9 4.8 0 15.7 3.1 15.4 4Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient174)"/>
                                    <path d="m429.7 374.5-3.3 14.8-2.1 9.2c-.1.7-.3 1.3-.4 2-2.9-.7-5.9-1.4-8.9-1.9-2.9-.5-5.8-1-8.8-1.4l-2.6-.3c-1.3-.1-2.7-.3-4-.4 1.6-6.9 4.6-12.3 8.8-16.2 2.7-2.6 5.9-4.5 9.4-5.8 3.7-1.3 8.1-1.9 11.6-.2.1 0 .3.1.4.2Z"
                                          style="fill:url(#New_swatch_26341)"/>
                                    <path d="M424.4 398.5c-.1.7-.3 1.3-.4 2-2.9-.7-5.9-1.4-8.9-1.9-.8-.3-1.5-.6-1.9-.6 3.8-.3 7.6 0 11.3.5Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient175)"/>
                                    <path d="M410.4 406.6c-2.1 9.4-4.6 16.3-6.9 24.3v.3c-1 3.3-1.9 6.7-2.7 10.6v.2c-.6 1.5-3.2 1-3.6 2.7-.3 0-.3.6-.2 1.4.2 1.3.6 3 .7 4.2v.6c0 .4 0 .7-.2.7-32.3 0-48.7 7.6-106.2 13.7-8.4.9-17.6 1.8-27.8 2.6-.8 0-1.5.1-2.3.2h-.8c-1.7.1-3.4.3-5.1.4h-3.5l-5.3.3h-7.9c-1.4 0-2.9 0-4.3.1h-26.4c-1.8 0-3.6-.1-5.5-.2h-1.2c-1.6 0-3.1-.1-4.7-.2h-8.8c-1.3 0-2.7-.2-4-.3h-2.3c-1.6-.1-3.1-.2-4.7-.4-.5 0-1.1 0-1.6-.1-.7 0-1.3-.1-2-.2h-.9c-1.9-.2-3.7-.3-5.6-.5-.9 0-1.8-.2-2.7-.3h-.2c-.7 0-1.3-.1-2-.2-.6 0-1.1-.1-1.7-.2-.4 0-.8 0-1.2-.1h-.9c-.6 0-1.2-.1-1.9-.2-3.1-.3-6.1-.7-9.2-1.1-.4 0-.8 0-1.1-.1-.4 0-.8-.1-1.2-.2h-.7c-1-.1-2.1-.3-3.1-.4-.6 0-1.1-.1-1.7-.2-2-.3-4-.5-6-.8-1.3-.2-2.6-.4-3.9-.5h-.3c-.7 0-1.4-.2-2.1-.3l-8.1-1.2c-1-.2-2-.3-3-.5l-15.4-2.4c0-.2 0-.4-.1-.6v-.4c0-.2 0-.5-.1-.7v-.6c0-.5-.2-1.1-.3-1.6v-1.3c0-.4 0-.8-.1-1.1v-1.5c0-.5 0-1-.1-1.6v-14.4c0-.5 1.9-.8 4.6-1 4.3-.3 10.4-.3 14.1 0 18.5-.8 36.9-1 55.4-1 10 0 19.9.2 29.9.5 3.8-.9 7.6-2.1 11.3-3.4 3.6-1.4 7-2.9 10.2-4.8a54 54 0 0 0 7.8-5.4l31.4-2.1c48.4-3.3 96.7-6.8 145.1-10.4.9 0 1.7-.1 2.6-.2Z"
                                          style="fill:url(#New_swatch_26342)"/>
                                    <path d="M375.1 432.3q-11.7 1.8-23.4 4.2l22.6-2.4c-1.1 2.5-1 3.4-2.2 5.8-4.4.9-8.7 2.2-13.1 3.1.9.8 2.1 1.3 3.5 2.2-7.3 1.6-14.6 3.2-21.8 4.7 9.3-1.1 18.5-2.1 27.8-3.1-.8 1.6-1.6 3.2-2.4 4.9-17.9 8.4-20.6 31.2-38 40.4-12 6.4-27.3 4.4-41.2 2.3.1-7.7-1-15.4-3.4-22.8.4-2.3-4.2-2.9-5.7-1-.2-4.6-.4-9.2-.5-13.9 7-.4 13.9-.7 20.9-1.1-7-.5-14-1-21-1.6 0-2.3-.2-4.5-.3-6.8l14.4-4.5-14.6 1.5c-.4-10.8-.8-21.7-1.3-32.5 37.1-5.3 75.4-7.5 113.1-13.3-4.1 11.3-8.5 22.6-13.4 33.7Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient176)"/>
                                    <path d="M242.4 437.1c23 0 46-1.4 68.7-4.5-.7.2 24-6.3 37.5-8.3l-2 .8c5.4.6 10.8 1.3 16.2 1.9 15.9.1 31.9.3 47.8.4-18.3-6.9-38.6-8.9-58.5-8.1s-39.5 4.3-59 8c-20.6 3.9-41.1 8.2-61.5 12.7l10.8-2.8Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient177)"/>
                                    <path d="M403.5 430.9v.3c-1 3.3-1.9 6.7-2.7 10.6v.2c-.6 1.5-3.2 1-3.6 2.7-.3 0-.3.6-.2 1.4.2 1.3.6 3 .7 4.2v.6c0 .4 0 .7-.2.7-32.3 0-48.7 7.6-106.2 13.7a77 77 0 0 0-9.8.6c-6 .8-12 1.5-18.1 2-.8 0-1.5.1-2.3.2h-.8c-1.7.1-3.4.3-5.1.4h-3.5l-5.3.3h-41.7c-2.1 0-4.2-.2-6.2-.3H197c-1.2 0-2.4-.1-3.6-.2h-3c-1.3 0-2.6-.2-3.9-.2h-1.1c-2.5-.2-4.9-.3-7.4-.5h-1.2c-.6 0-1.3-.1-1.9-.2-.8 0-1.5-.1-2.3-.2h-.6c-1.9-.2-3.7-.3-5.6-.5-.9 0-1.8-.2-2.7-.3h-.2c-.7 0-1.3-.1-2-.2-2.5-.3-5-.5-7.5-.8-.6 0-1.3-.1-1.9-.2-.6 0-1.2-.1-1.8-.2-.7 0-1.4-.2-2-.2-.5 0-1-.1-1.5-.2-.4 0-.8 0-1.1-.1-.7 0-1.3-.2-2-.2-.4 0-.8 0-1.2-.1-.6 0-1.3-.2-1.9-.2s-1.1-.1-1.7-.2c-1.4-.2-2.7-.4-4.1-.5-.6 0-1.3-.2-1.9-.3-2.7-.4-5.5-.8-8.2-1.1-.5 0-1-.1-1.4-.2l-2.4-.3c-.5 0-1-.1-1.5-.2l-3.9-.6c-1.2-.2-2.4-.4-3.5-.5l-2.2-.3c-1.1-.2-2.2-.3-3.4-.5-2.1-.3-4.2-.7-6.2-1 0-.2 0-.4-.1-.6v-.4c0-.2 0-.5-.1-.7v-.6c0-.5-.2-1.1-.3-1.6v-1.3c0-.4 0-.8-.1-1.1v-1.5c0-.5 0-1-.1-1.6 22.1 5.8 27.4 8.2 50.4 7.4-14.9-2.2-24.1-5.4-31.3-7.5 5.6.2 38.1 1.7 43.7 1.1 14.9-1.6 58.7-4.4 75.2-4.4-8.1 2-49.2 4.2-61.2 6.1 19.9 3 36.9 3.6 41.4 3.8-5.6 1.4-21.6 3-23 3.5 37 4.4 59.1.6 89.8-4-19.9.1-39.9-1.4-59.5-4.6 13.8 0 27.6 0 41.5.1 17.3-5 35.1-8.6 53.1-10.7.8 0 1.6-.2 2.5-.3-.3.1-.7.3-1 .4-4.5 1.7-8.9 3.5-13.4 5.2 5.3-1.9 10.8-3.6 16.3-4.9 13.6-3.3 27.8-4.9 41.9-4.7-9.1 2-18.1 3.9-27.2 5.9-16 3.5-32.1 6.9-48.1 10.4 8.8 1.7 18 1.9 26.9.5 13.9-.5 27.8-2.3 41.3-5.3-5.6.3-11.1.6-16.7.8 5.6-1.5 11.3-3.1 16.9-4.6 9.8-2.7 19.5-5.3 29.3-8-4.1-2-9-2.7-13.6-2 9.6-1.8 19.5-2.4 29.3-1.8Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient178)"/>
                                    <path d="m209.6 437 2 23.2 27.5-.8-1.1-25.1z"
                                          style="mix-blend-mode:multiply;fill:url(#New_swatch_26343)"/>
                                    <path d="m235 478.5-23.7-.1.3-17.6v-.6l23.6-.8-1-.2z"
                                          style="fill:url(#New_swatch_26344)"/>
                                    <path d="M236.9 467c-4.2 1.2-8.7 1.7-12.9.6-4.7-1.2-8.5-4-12.3-6.9v-.6l23.6-.7c.3.9.5 1.9.8 2.8.2.7.4 1.4.8 2v2.7Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient179)"/>
                                    <path d="m236.8 459.2 1.1 19.7-2.9-.4-.7-20.5z" class="st608"/>
                                    <path d="m211.3 478.4 3.3.9 25.8.7-2.9-1.3z" class="st412"/>
                                    <path d="m239.1 457.3-23.9 2.1-.3-2.5-2.4-18.6 5.9-.2 5.4-.2 3.5-.2 5.5-.2 4.4-.1.5 5.9z"
                                          class="st593"/>
                                    <path d="M225 448c0-2.2-.7-5.2-2.3-6.8-1.1-1.2-2.1-2.2-4.2-2.8h3.9c2.2-.2 4.1 1.2 4.3 3.1.2 2.1-.4 4.7-1.7 6.5"
                                          class="st13"/>
                                    <path d="m239.1 457.3-24 2.1-1.6-1.3c.8-.1 4.4-2.3 8.2-3.8 6.9-2.8 5.9-14.9 5.5-16.5l5.5-.2c1.4 1.1 2.6 2.4 3.6 3.8.5.6.9 1.3 1.3 2l1.4 14Z"
                                          class="st156"/>
                                    <path d="M223.5 448.6c0 1.6-.2 3.2-.7 4.6-1.3 3.8-4.5 6.5-8.3 6.6-3.4.1-6.5-1.8-8.4-4.8v-.1c-.9-1.6-1.5-3.5-1.6-5.5-.3-6 3.7-11 8.9-11.3 3.9-.2 7.4 2.3 9 6.1.6 1.3 1 2.8 1 4.4Z"
                                          class="st618"/>
                                    <path d="M220.4 448.7c.2 4.6-2.6 8.4-6.4 8.5-3.5.1-6.5-2.8-7.1-6.8 0-.4-.1-.8-.1-1.1-.2-4.1 2.1-7.6 5.3-8.4.4 0 .8-.2 1.2-.2 3.8-.2 7 3.4 7.3 7.9Z"
                                          class="st596"/>
                                    <path d="M220.4 448.7c.2 4.6-2.6 8.4-6.4 8.5-3.5.1-6.5-2.8-7.1-6.8.3.2.7.3 1.1.4 3.4 1 7.5-.7 9-3.6.7-1.4.8-3.3-.5-4.4-1.2-1-3.3-1-4.5-1.9.4 0 .8-.2 1.2-.2 3.8-.2 7 3.4 7.3 7.9Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient180)"/>
                                    <path d="M222.8 453a20 20 0 0 0-.6-6.9c-.7-2.2-2.2-4.3-4.3-5.6a8.2 8.2 0 0 0-7.3-.7c-2.6 1.1-4.1 3.7-4.5 6.2-.4 2.6 0 5.2.4 7.7v.9c0 .1-.2.3-.3.4-1-1.6-1.6-3.5-1.7-5.6-.3-6 3.7-11 8.9-11.3s9.8 4.5 10.1 10.4c0 1.6-.2 3.2-.7 4.6v-.2Z"
                                          class="st68"/>
                                    <path d="M223.5 448.6c0 1.6-.2 3.2-.7 4.6-1.3 3.8-4.5 6.5-8.3 6.6-3.4.1-6.5-1.8-8.4-4.8v-.1l.6.6c5.4 7.1 16.6 3.8 15.9-9.7 0-.5 0-1-.1-1.5.6 1.3 1 2.8 1 4.4Z"
                                          class="st179"/>
                                    <path d="M236.4 512.1c-11.7.1-22.1-.1-31.5-.7-5.6-.3-10.9-.8-15.8-1.3-1.5-.2-2.9-.3-4.3-.5a263 263 0 0 1-18-2.9c-6-.5-11.9-1.4-17.6-2.9-8.3-2.1-16.3-5.4-23.2-9.7-5.1-3.2-9.7-7-13.4-11.4q-3.6-3.9-6.3-8.1c-6.3-10-9.2-21.6-8-33v-7.2c0-.5 1.9-.8 4.6-1l2.7.6 24 5.4c-2 .4-4 .7-5.9 1.1 1.6 5.5 5.4 11.2 7.6 14.1 4.5 6.3 5.1 5.3 13 7.7l2.1.3c-.4.1-.7.3-1 .5-.4.3-5.7-.5-6-.2 0 0 7.5 2.9 7.8 3.3 1.2 1.4 4.4 13.7 13.2 17.7 10.3 4.7 11.8-.7 22.1 4.1-2.3-.5-4.6-.9-6.9-1.4 2.2.9 4.4 1.7 6.6 2.6-1.5.2-2.9.3-4.4.5l-12.5 1.5 10.9 1.5c-2.8 1-5.6 1.9-8.4 2.9-3.7 1.3-7.4 2.5-11.1 3.8 7.3.3 14.6 1.1 21.8 2.1 10.7 1.6 21.3 3.9 31.6 7-1.7-.5-3.4-1.1-5.1-1.6 10.5 1.7 21.1 3.5 31.6 5.2Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient181)"/>
                                    <path d="M170.8 465.3c22.5 2.4 45.1 3.8 67.6 4.1-46.2 1.4-92.8-4.1-138.5-11.5 0-.2 0-.4-.1-.6v-.4c17.5 2.7 23 1.3 34.4 3.7 10.9 3.3 23.1 4.1 36.7 4.8Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient182)"/>
                                    <path d="m137.6 440.5 1.2 18.6 15.5-.7-1.5-18.9z"
                                          style="mix-blend-mode:multiply;fill:url(#New_swatch_26345)"/>
                                    <path d="m154.9 473.9-16.3-.9.2-13.5v-.4l16.1-.6-.7-.1 1.8 4 .1 2.2z"
                                          style="fill:url(#New_swatch_26346)"/>
                                    <path d="M156.1 464.6c-2.9.9-6 1.3-8.8.5-3.2-.9-5.8-3.2-8.4-5.5v-.5l15.4-.6c1.1 4.4 1.3 2.8 1.8 3.9z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient183)"/>
                                    <path d="m157.5 458.8 1 16-5.3-.9v-15.5z"
                                          style="fill:url(#linear-gradient184)"/>
                                    <path d="m138.6 473 2.2.8 17.7 1-3.8-1z" style="fill:url(#New_swatch_2693)"/>
                                    <path d="m154.3 456.7-18 1.7-.2-1.5v-.5l-1.8-14.9 4.4-.1 4.1-.2 2.6-.1 7.4-.3.5 4.4v.4z"
                                          style="fill:url(#New_swatch_193)"/>
                                    <path d="M143.7 449.4c0-1.8-.5-4.1-1.7-5.5-.9-.9-1.6-1.8-3.2-2.3h2.9c1.6-.2 3.1 1 3.2 2.5.2 1.7-.3 3.8-1.3 5.2Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient185)"/>
                                    <path d="m154.3 456.7-18 1.7-1.2-1.1c.2 0 .6-.2 1.1-.5 1.2-.6 3.1-1.7 5.1-2.6 5.2-2.2 4.5-11.9 4.2-13.2l7.4-.3.4 4.4v.3l1.1 11.2Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient186)"/>
                                    <path d="M142.5 449.7a9 9 0 0 1-.4 3.7c-.9 3-3.1 5.2-5.8 5.4-2.5.2-4.8-1.4-6.1-3.8-.7-1.3-1.2-2.8-1.3-4.4-.4-4.8 2.4-8.9 6.1-9.1 2.8-.2 5.3 1.8 6.6 4.8.5 1 .8 2.2.9 3.5Z"
                                          style="fill:url(#New_swatch_2613)"/>
                                    <path d="M140.3 449.8c.3 3.6-1.7 6.7-4.4 6.9-2.5.2-4.7-2.2-5.3-5.4 0-.3 0-.6-.1-.9-.3-3.3 1.3-6.1 3.6-6.8.3 0 .5-.1.8-.2 2.7-.2 5.1 2.6 5.4 6.3Z"
                                          style="fill:url(#linear-gradient187)"/>
                                    <path d="M140.3 449.8c.3 3.6-1.7 6.7-4.4 6.9-2.5.2-4.7-2.2-5.3-5.4.3.1.5.2.8.3 2.5.7 5.4-.6 6.4-3 .5-1.2.5-2.7-.4-3.5s-2.4-.8-3.3-1.5c.3 0 .5-.1.8-.2 2.7-.2 5.1 2.6 5.4 6.3Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient188)"/>
                                    <path d="M142.2 453.2c0-1.9 0-3.8-.6-5.5-.6-1.8-1.7-3.4-3.2-4.4a5.3 5.3 0 0 0-5.3-.4c-1.8.9-2.8 3-3.1 5s.2 4.1.5 6.2v.7c0 .1-.1.2-.2.3-.7-1.3-1.2-2.8-1.4-4.5-.4-4.8 2.4-8.9 6.1-9.1 3.8-.2 7.1 3.4 7.5 8.2a9 9 0 0 1-.4 3.7v-.2Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient189)"/>
                                    <path d="M142.5 449.7a9 9 0 0 1-.4 3.7c-.9 3-3.2 5.2-6.1 5.4-2.6.2-5-1.3-6.4-3.8.1.2.3.3.5.5 4.2 5.6 12.6 2.8 11.7-8 0-.4 0-.8-.1-1.2.5 1 .8 2.2.9 3.5Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient190)"/>
                                    <path d="M270.2 465.7c17.7-4.2 37.1-3.1 55.4-4.8-14.7 2.3-25.9 3.7-40.5 5.1-7.1.6-17.7 1.6-24.8 2.2 3.3-.8 6.6-1.7 9.9-2.5"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient191)"/>
                                    <path d="M397.6 451c0 .4 0 .7-.2.7-13.1 0-28.8 1.6-45.4 3.8 6.7-1.3 13.4-2.7 20.2-3.7 8.4-1.3 17-2 25.4-1.4z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient192)"/>
                                    <path d="M415.5 370.4c-2 11.5-3.9 23.1-5.9 34.7-1.2 7.2-2.4 14.4-3.7 21.6-15.4-2.2-30.9-2.3-46.4-1.4-24.7 1.5-49.5 5.7-74.2 8.7-1.3.2-2.6.3-3.9.5A651 651 0 0 1 213 439q-10.95.15-21.9 0c7.4-1.4 15.3-4.4 22.6-8.3 14.2-7.5 23.8-31.7 29-45.3 2.7-7 6.3-1.9 12.3-7.2 5.1-4.5 12.7-6.1 19.9-7.4 5.9-1 11.8-2 17.7-2.8 29.9-4.3 60.3-6.2 90.6-5.8 8 .1 16.1.4 24.1.8 2.9.2 6.4.6 7.8 2.8.9 1.4.7 3.2.4 4.8Z"
                                          class="st589"/>
                                    <path d="M363 392.6c-25.7 1.4-60.4 6.2-85.2 12.3 24-3.6 57.6-5.8 81.9-4.7 16.9 0 33.9.7 50.7 1.9-2.8-.5-3.6-3.7-5.7-5.2-1.5-1.1-3.5-1.4-5.5-1.6-17.6-2.1-35.6-2.3-53.3-.5l17-2.1Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient193)"/>
                                    <path d="M409.6 405c-1.2 7.2-2.4 14.4-3.7 21.6a206 206 0 0 0-30.4-1.9c-31.3.2-62.8 6-94.1 9.7a651 651 0 0 1-68.4 4.5c-.3-.7-.8-1.4-1.6-2.1-.4-.4-.8-.8-1.3-1.2 29.9-2.5 67-8.9 95.3-17.5-.8-.5-9.1-.2-9.8-.7 3-.9 6-1.8 9-2.6-15.4 1.2-30.9 2.5-46.3 3.7 35.6-8.3 72.6-11 109.3-13.7-20.9 4-42.1 8-61.4 15.9 17.5-.3 35-1.5 52.3-3.7 2-1 3.9-1.9 5.9-2.9-2.2-1.2-4.9-1.8-7.5-1.7 17.3-3.8 34.9-6.3 52.7-7.4"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient194)"/>
                                    <path d="M383.2 362c-2 4.9-3.8 9.8-5.5 14.8-.5 1.5-.9 2.9-1.4 4.4-2.1 6.9-3.8 13.8-5.1 20.8a17.3 17.3 0 0 1-10.6 7.5c1.7.1 3.5.3 5.2.4q-2.85 7.65-6.3 15.3-3.75 8.25-8.1 16.2l-3.5-3.8c-20 6.8-42.8 7.2-63.1 1 .2-1.6.3-3.2.5-4.7.3-2.7.5-5.5.7-8.2 2.1-.2 4.2-.5 6.2-.7-3.6-2.3-5.7-6.3-5.1-10.2l14.7-3.6h-2.7.5c-4.3 0-8.7.2-13 .5v-.5c.1-4.9.1-9.9 0-14.8V394c0-2.6-.2-5.2-.3-7.8V385q-.3-5.7-.9-11.4c0-.6-.1-1.2-.2-1.9.1.6.2 1.2.4 1.8.1.6.3 1.3.4 1.9l2.3-2.6 4.4-5.1c24.2-3.4 48.6-5.4 73.1-5.8 5.8 0 11.7-.1 17.5 0Z"
                                          style="fill:url(#linear-gradient195);mix-blend-mode:screen"/>
                                    <path d="M375.5 424.7c-31.3.2-62.8 6-94.1 9.7-22.7 2.7-75.5 4.7-98.4 5-.3-.7 29.2-1.9 28.5-2.6 14.2-1.5 28.5-2.7 42.8-3.6 24.1 2.5 48.4-2 72.3-5.4 16.1-2.3 32.7-4.1 48.9-3.1"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient196)"/>
                                    <path d="M404.4 370.6c-.3 2.8-.7 5.5-1 8.2v.3c0 .6-.2 1.3-.2 1.9-.2 1.4-.3 2.8-.5 4.3-.5 3.8-.9 7.6-1.4 11.4v.7l-6.4-.3c-9.7-.4-19.4-.5-28.9-.3-30.4.5-60.3 3.7-90.4 8.8-12.4 2.1-24.9 4.5-37.4 7.2-2.1.5-4.4.6-6.6.9-.6 0-1.2.2-1.8.2.5-.4 1-.7 1.5-1.1 4.2-3 7.5-5.6 10.1-8.2 2.5-2.5-2.4-22.7-1.1-25.2 2-3.9 9.6 9.7 9.8 4.7 8.4-3 16.9-5.6 25.6-8a409 409 0 0 1 120.2-14.3c2.7 0 5.7.3 7.5 2.1s1.6 4.4 1.3 6.7Z"
                                          style="fill:url(#New_swatch_26347)"/>
                                    <path d="M403.1 381.3c-12.1.9-24.3 1.9-36.4 2.8 12-.4 24 .1 35.9 1.5l-1.5 12.1c-58-3.4-101.6 3-169.8 16.2-.6.1-1.2.2-1.8.2.5-.4 1-.7 1.5-1.1 4.2-3 7.5-5.6 10.1-8.2 30-6.9 60.5-12.3 91.3-16.2-13.6.2-27.2.3-40.7.5 29.3-3.5 58.6-6.9 87.9-10.4 7.9-.9 16.4-1.8 23.8.6 1.3.4 2.7 1 3.9 1.6l-4.1.3Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient197)"/>
                                    <path d="M383.2 362c-3.3 4.1-6.7 8.2-10 12.3 1.8.4 3.4 1.3 4.6 2.5.3.4.6.7.8 1.1-.7 1.1-1.5 2.2-2.2 3.2-3.5 5.2-7.1 10.4-10.6 15.6-1.8 2.6-3.5 5.2-5.3 7.7l-15.6 5.4-43 1.2h-2.7.5l4.8-.6c-5.9.2-11.9.4-17.8.5l-11.4.3v-11.4c3.8-1.1 7.6-2.4 11.4-3.7v-2.4l-11.3.6v-4.2c3.6-1.4 7.3-2.9 10.9-4.3v-1.2c-3.6.2-7.2.5-10.9.7v-9.5c3.3-.9 6.6-1.8 10-2.6h.2c.9-.2 1.8-.4 2.6-.6a403 403 0 0 1 77.5-10.8c5.9-.3 11.9-.4 17.8-.4-.1.1-.2.3-.3.4Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient198)"/>
                                    <path d="M403 396.9h-1.8c-2.2 0-4.3.2-6.5.3-53.2-2.1-101.4 4.5-156.7 15.7l-3.9-2.2c42.1-5.5 82.4-14.6 102.3-17.3 20.4.3 44.5 2.9 64.9 3.3h1.8Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient199)"/>
                                    <path d="M263.4 436.3"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient200)"/>
                                    <path d="M248.8 407.4c-1.7.6-3.3 2.4-5 3 1.2.7 2.9.1 4.7.6-.5 12.3 1.8 24.9 1.5 25.5s-3.2.4-4.7.7c1.1.3 4.6.7 5.7.9-.4 4.1 2.5 22.6 6.1 30.1-.9.6-3.1.4-4.6.6 1.1.3 4.1.5 5.2.9 3 14.1 13.8 22.1 13.8 22.1s-6.2.1-6.1.2l6.5.6c6.5 7.1 11.6 12.4 21.2 16.1-5.6.6-7.3.7-12.5 1.2-2.1-1.7-4.1-3.6-5.9-5.5-3.8-3.9-8.8-6.2-11.9-10.5-3.7-4.9-8.6-6.4-11.5-11.8-1.4-2.6-.8-8.1-1.9-10.8-1.4-3.1-1.3-8.7-2.3-11.9-.8-2.3-1.4-4.5-2-6.8-.2-.9-.5-1.8-.7-2.6-1-4.3-1.8-8.6-2.2-12.9-4.3 1.2-3.8-3.6-7.8-2.8-17.1 3.6-40.8 4.4-61.4 5.3-1.6 6.6 2.3 27.9 2.3 27.9-.9 0-2 0-3.2-.1.3.5 1.3 2 3.9 2.4-.2 3.8 4.1 16.1 5.3 18.5-1 .5-1.6.4-2.6.9 1.3.2 2.3.5 3.7.7 0 .1 4.5 11.3 23 21.5-5.6-.3-10.9-.8-15.8-1.3-8.6-5.2-15-12.9-19.2-21.4-.9-1.7-1.6-3.5-2.3-5.2-.6-1.6-1.2-3.2-1.6-4.8l-1.2-4.4c0-.3-.2-.7-.2-1-.5-2.2-.9-4.5-1.3-6.7 0-.5-.2-1.1-.2-1.6-.7-5.1-1.1-10.2-1.4-15.3-.1-1.9.2-8.3.1-10.2-27.3 2.8-63.3 1-63.3.9s-.4.9-.4-1.4c7.3-2 20-3.3 34.4-4.3 12.6-.9 26.6-1.6 39.7-2.2 16.6-.9 31.8-1.7 41.2-3 6.2-.8 9.8-1.9 9.6-3.2.2-.5.4-1 .6-1.6 5.8-15.4 10.8-30.4 20.4-39.4 8.8-8.2 21.8-10.8 36.7-15.2 24.6-7.4 59.3-10.7 110.5-13.6 8.9-.5 18.6.9 26.5 4.5h.1c5.2 2.4 9.7 5.7 12.7 10-4.9.1-13.2-2.2-18.9-2.2-86.8-.6-160.6 18.4-160.6 18.4 0 .3-2.8 16.4-2.3 20.2Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient201)"/>
                                    <path d="M196.3 512c1.8.2 4.3-.4 6.1-.8A52 52 0 0 1 172 479c-4.5-13.9-4.1-28.5-3.8-42.8l-6.2-.6c-.9 14.5-1.8 29.3 2.4 43.3s13.6 31.5 31.8 33.1Z"
                                          style="fill:url(#New_swatch_27736)"/>
                                    <path d="M196.3 512c1.8.2 4.3-.4 6.1-.8A52 52 0 0 1 172 479c-4.5-13.9-4.1-28.5-3.8-42.8l-6.2-.6c-.9 14.5-1.8 29.3 2.4 43.3s13.6 31.5 31.8 33.1Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient202)"/>
                                    <path d="M197 512c-5.3.1-10.2-.4-13.9-1.7-4.4-1.5-21.3-6.2-27.7-43-.4-2.4-.8-5-1.1-7.8-.3-2.7-.6-5.6-.8-8.7-.3-4.9-.5-10.2-.5-16 3.6.2 8.1-.8 11.7-.6-.4 7.7-.4 14.4-.2 20.4.2 4.7.6 8.9 1.1 12.7.2 1.8.5 3.4.8 5 2.1 11.1 5.7 18.4 9.6 24.3 4.7 6.9 12.1 13.2 21.1 15.3Z"
                                          style="fill:url(#New_swatch_27737)"/>
                                    <path d="M151.3 438.8c6.4-.4 12.7-.7 19.1-1.2-6.8 1.6-13.7 2.1-19.1 1.2"
                                          style="fill:url(#New_swatch_27738)"/>
                                    <path d="M410.7 349.6c-.7 3.7-1.1 5.8-1.6 7.9-.5 2.4-1 4.6-1.8 8.8-11.4-3.8-76.6-5-163.8 18.4a8.6 8.6 0 0 0-4.6 3.1c-2.4 3.2-3.2 7.8-6.6 10.7.8-4.4.3-10.4.7-15.4.3-3.7 1.2-6.9 3.6-8.6 1-.3 2-.5 3.1-.8.2 0 .4 0 .6-.1.3 0 .5-.1.8-.2 75.7-19.2 113.9-27.1 169.6-23.8"
                                          style="fill:url(#New_swatch_27739)"/>
                                    <path d="M241.1 373.4c-.5 2.8-1 5.5-1.3 8.2-.3 2.1-.6 4.2-.8 6.3l-.6 5.3c-1.8 17.9-1.2 31.3-1.2 31.3-.9 3.3-4.5 5.9-11.5 7.9-18.5 5.4-60.5 7.1-136.9 7.1-.3-2.2-.3-3.1-.4-4.5 0-.6-.1-1.3-.2-2.3 45.8-1.9 118.7-4.5 133.2-12.1 5.7-3 1.3-14.7 3.7-35.4 0-.5.1-1 .2-1.5.3-2 .6-4 1-6.1 0 0 3.7-1.2 10.5-3 1-.3 2-.5 3.1-.8.2 0 .4 0 .6-.1.3 0 .5-.1.8-.2Z"
                                          style="fill:url(#New_swatch_27740)"/>
                                    <path d="M410.7 349.6c-.7 3.7-1.1 5.8-1.6 7.9-56.5-3.8-114 4-166.4 22.4-.5-1.2-1-2.5-1.5-3.7l-.6 5.1c-.3 0-.6.1-.8.2-2.2.5-4.5 1.1-6.8 1.6-2.7.6-5.3 1.3-8 1.9.3-2.4.6-4.9 1.1-7.5 0 0 3.7-1.2 10.5-3 1-.3 2-.5 3.1-.8.2 0 .4 0 .6-.1.3 0 .5-.1.8-.2 75.7-19.2 113.9-27.1 169.6-23.8"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient203)"/>
                                    <path d="M239.3 385.2c57.9-15.5 124.9-26.2 173.6-21-1.4 1.5-5.4 2.2-6.8 3.7-35.8-6.7-110.3 5.1-161.5 18.8-2.9.8-3 1.4-5.2-1.4Z"
                                          style="fill:url(#New_swatch_27741)"/>
                                    <path d="M239.3 385.2c57.9-15.5 124.9-26.2 173.6-21-1.4 1.5-5.4 2.2-6.8 3.7-35.8-6.7-110.3 5.1-161.5 18.8-2.6.7-3 1.4-5.2-1.4Z"
                                          style="mix-blend-mode:multiply;fill:url(#New_swatch_27742);opacity:.5"/>
                                    <path d="M239.3 385c1.9.2 4 1.3 5.3 1.6-3.2 26.8-2.8 66.7 11.8 94 6.2 11.6 19.8 23.1 33.4 28.4-1.7.8-3 1.2-3 1.2s-16.3-2.1-21.2-6.3c-6.2-5.2-18-15.3-20.9-22.3-12.8-31-8.4-70.7-5.3-96.6Z"
                                          style="fill:url(#New_swatch_27743)"/>
                                    <path d="M239.3 385c1.9.2 4 1.3 5.3 1.6-3.2 26.8-2.8 66.7 11.8 94 6.2 11.6 19.8 23.1 33.4 28.4-1.7.8-3 1.2-3 1.2s-16.3-2.1-21.2-6.3c-6.2-5.2-18-15.3-20.9-22.3-12.8-31-7-82.2-5.3-96.6Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient204)"/>
                                    <path d="M286.7 510.3c-8.2 1.3-10.5 2.4-18.6.5-13.3-6.5-22.3-15.9-28.8-27.6-1.9-3.5-3.6-7.2-5.1-11-1-2.6-1.9-5.3-2.7-8-1.9-6.5-3.3-13.1-4.3-19.7-2.1-13.7-2.5-26.9-2.5-37.2 5.4-2.1 11.1-19.3 13.7-14.8.3.5-2.6 29.3 2.6 57 1.1 5.7 2.4 11.3 4.3 16.6 1.1 3.3 2.4 6.5 3.9 9.5 1.5 3.1 3.2 6 5.2 8.7 7.4 10.1 24.2 23.9 32.5 25.8Z"
                                          style="fill:url(#New_swatch_27744)"/>
                                    <path d="M334.5 503.3c13.4-.3 26.1-5.7 36.1-13.3s17.8-17.2 24.1-27.4c10.4-17 17.9-39.2 25.6-63.4 2.9-2.5 5.8-4.9 8.7-7.4a64 64 0 0 0-1.2-17.5l-16.9 16.3c.6 5.4-1.4 10.8-3.4 15.9-7.8 19.7-17.2 39-28.2 57.5-4.4 7.4-9.1 14.8-15.4 21.2s-14.3 11.7-29.4 18Z"
                                          style="fill:url(#New_swatch_26459)"/>
                                    <path d="M418.4 392.8c-4.9 19.1-11.3 37.9-18.9 56.3-3.9 9.4-15.2 34.1-38.7 45.1-10.9 5.1-19.9 8.5-36.3 10.5 19.6-9.7 40-20 52.5-36.2 6.8-8.9 10.9-19.2 14.3-29.5 5.9-17.8 10-36 12.3-54.4 3.7 4.1 9.5 6.8 14.9 8.1Z"
                                          style="fill:url(#New_swatch_27745)"/>
                                    <path d="M418.4 392.8c-4.9 19.1-11.3 37.9-18.9 56.3-3.9 9.4-15.2 34.1-38.7 45.1-10.9 5.1-19.9 8.5-36.3 10.5 19.6-9.7 40-20 52.5-36.2 6.8-8.9 10.9-19.2 14.3-29.5 5.9-17.8 10-36 12.3-54.4 3.7 4.1 9.5 6.8 14.9 8.1Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient205)"/>
                                    <path d="m405.2 398.2 11.4 1.1 12.1-7.4c-4.8-2.4-14.1-6.1-14.1-6.1l-9.4 12.5Z"
                                          style="fill:url(#New_swatch_27746)"/>
                                    <path d="m405.2 398.2 11.4 1.1 12.1-7.4c-4.8-2.4-14.1-6.1-14.1-6.1l-9.4 12.5Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient206)"/>
                                    <path d="M495.6 263.1c-.2.2-.4.4-.5.7q-29.4 37.05-56.7 75.3c-3.3 4.6-6.6 9.3-10.8 13.3-.8.8-1.7 1.6-2.6 2.3-2.5 2-6.9 3.5-11.1 4.2-1.5.2-3 .4-4.3.5-3.6.1-6.5-.4-7.4-1.9 1-.9-2.5-6.5-1.5-7.5 23.5-22.3 64.9-61.6 91.9-90.4.5.5 1 1.1 1.5 1.6.6.7 1.2 1.3 1.8 2Z"
                                          style="fill:url(#New_swatch_27747)"/>
                                    <path d="M426.6 351.9c3.4 2.2 6.1 1.4 9.7 1.2 20.2-31.3 38.3-59.2 61.1-89.1l-3.9-.3s-37.8 48.1-66.9 88.3Z"
                                          style="fill:url(#New_swatch_27748)"/>
                                    <path d="M473.6 279.3c5.1-1.3 10.3-2.4 15.5-3.2.4-.4.5-1.3.3-1.7-7.6 2.4-11.2 2.5-14.9 3.6s-1.5 1.5-.9 1.3"
                                          style="fill:url(#New_swatch_26460)"/>
                                    <path d="M426.7 351.6c2.9 0 9.6 1.5 9.6 1.5s-4.9 24.9-7.5 38.8c-3.4-.9-7.1-.3-10.5-1.2 2.9-12.7 5.4-26.6 8.4-39Z"
                                          style="fill:url(#New_swatch_27749)"/>
                                    <path d="M426.7 351.6v.6c-.6 6.3-1.8 13.8-3.2 20.9a289.44 289.44 0 0 1-3.5 17c-.3 1.1-5.7 4.6-11 8.3-2.2 8-4.5 15.8-7 23.6-3 9.5-6.4 18.9-10 28.2 0 .1-.1.3-.2.4-3.1 8-6.6 15.9-12.1 22.9-7.7 9.9-19.1 17.3-31.4 22.8a126 126 0 0 1-33.2 9.6l-4.8.6c1.9-.5 3.9-1 5.7-1.5 14.9-4.1 27.6-10 39.3-19.1 5.6-4.4 10.5-9.3 14.8-14.7 8.8-11.2 14.8-24.1 18.7-37.4 0-.3.2-.5.2-.8s.2-.6.3-.9c1-3.4 1.8-6.8 2.5-10.2 5-23.8 5-48.2 8.6-72.2 6.2 3.3 7.6 5.8 26.2 1.7Z"
                                          style="fill:url(#New_swatch_27750)"/>
                                    <path d="m497.4 263.9-2.4-.1-1.6-.1-.4-1.6-.7-2.6 2.1.9 1.2.6z"
                                          style="fill:url(#New_swatch_27751)"/>
                                    <path d="M226.2 431.4c4.5-3 7.5-6.1 9.3-10.8 1.7-4.7 1.6-9.8 2-14.8.2 4.8-.3 11.5-1.7 16.3s-3.4 6.6-9.5 9.3Z"
                                          style="fill:url(#New_swatch_27752)"/>
                                    <path d="M318 451.7c-.3 0-.7.1-1 .2-1.6 0-3.2.1-4.8.1z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient207)"/>
                                    <path d="M412.8 398h.3z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient208)"/>
                                    <path d="M245.2 466.2c-4.6-.5-9.1-1.2-13.7-2-1.9-6.5-3.3-13.1-4.3-19.7 4.6 1.7 9.2 3.3 13.8 5 1.1 5.7 2.4 11.3 4.3 16.6Z"
                                          class="st115"/>
                                    <path d="M286.7 510.3c-8.2 1.3-10.5 2.4-18.6.5-13.3-6.5-22.3-15.9-28.8-27.6-1.9-3.5-3.6-7.2-5.1-11 .7.2 1.4.3 2.1.5l12.7 3c1.5 3.1 3.2 6 5.2 8.7 7.4 10.1 24.2 23.9 32.5 25.8Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient209)"/>
                                    <path d="M165.5 467.4c-3.8-2.6-7.5-5.3-11.3-7.9-.3-2.7-.6-5.6-.8-8.7 3.7 1.3 7.3 2.6 11 3.9.2 4.7.6 8.9 1.1 12.7"
                                          style="mix-blend-mode:multiply;opacity:.6;fill:url(#linear-gradient210)"/>
                                    <path d="M197 512c-5.3.1-10.2-.4-13.9-1.7-4.4-1.5-21.3-6.2-27.7-43 3.7 1.7 7.3 3.4 11 5.2 2.1 11.1 5.7 18.4 9.6 24.3 4.7 6.9 12.1 13.2 21.1 15.3Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient211)"/>
                                    <path d="M391.8 450.9c-3.1 8-6.6 15.9-12.1 22.9-7.7 9.9-19.1 17.3-31.4 22.8a126 126 0 0 1-33.2 9.6l.9-.9c14.9-4.1 27.6-10 39.3-19.1 5.6-4.4 10.5-9.3 14.8-14.7 8.8-5.5 16.2-12.5 21.7-20.6"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient212)"/>
                                    <path d="M423.4 373.2c-1.2 6.4-2.5 12.5-3.5 17-.3 1.1-5.7 4.6-11 8.3-2.2 8-4.5 15.8-7 23.6-6.2 9.4-11.8 16.9-16.1 20.8.2-.6 2.2-6.2 2.3-6.8 9.1-17.5 19.1-43.7 19.1-43.7s12.5-10.4 16.2-19.3Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient213)"/>
                                    <path d="M290 384.6c-1.2.5-2.4.9-3.6 1.4v-1.2c1.2 0 2.5-.2 3.7-.3Z"
                                          style="fill:url(#linear-gradient214)"/>
                                    <path d="M294.3 393.5c-2.5 1-5 1.9-7.6 2.8v-2.4c2.5-.1 5.1-.3 7.6-.4"
                                          style="fill:url(#linear-gradient215)"/>
                                    <path d="M302 411.1h-2.9 2.8Z" style="fill:url(#linear-gradient216)"/>
                                    <path d="M426.7 351.6v.6c-.6 6.3-1.8 13.8-3.2 20.9-.3 1.7-.6 3.3-.9 4.9-3.6 5.8-8 11.2-13.6 15.7a8.3 8.3 0 0 1-2.6-6.9c-1.5 10.4-12 39.3-17.1 46.3 0-.3.2-.6.3-.9 1-3.4 1.8-6.8 2.5-10.2 5-23.8 5-48.2 8.6-72.2 6.2 3.3 7.6 5.8 26.2 1.7Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient217)"/>
                                    <path d="M130.7 381.7c.2 3.6.5 6.5.8 8.7a32 32 0 0 1-3.6-8.2c0-.2 0-.4-.1-.5-1.8.2-3.6.4-5.4.7-5.5.9-10.9 2.3-16.3 3.7 5.2-2.1 10.7-3.8 16.2-5 1.7-.4 3.5-.8 5.2-1.1-.2-1.2-.4-2.4-.7-3.7-1.6.2-3.1.4-4.7.7-12.3 2.4-23.6 8.5-35.9 10.5 0-.9 0-1.8.1-2.8 15.6-3 24.8-9 43.9-12 .1 3.2.2 6.2.4 8.8v.2Zm-3.2-1.7v-.1c-.3 0-.6.1-.9.2h.9Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient218)"/>
                                    <path d="M229.9 421.2q-2.25 1.5-4.8 2.7c-6.9 3.5-14.8 5.7-22.8 6.5 0-.7-.2-1.5-.2-2.2-.6 1-1.3 2-1.9 3l-51.2 3.6c-.2-.7-.4-1.4-.5-2.2l-1.2 2q-29.4 1.8-58.8.3c0-.6-.1-1.3-.2-2.3 45.8-1.9 118.7-4.5 133.2-12.1 5.7-3 1.3-14.7 3.7-35.4 0-.5.1-1 .2-1.5 0 22.3 1.7 23.9 1.7 32.1 0 5.5.4 3.2 3 5.5Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient219)"/>
                                    <path d="m169.4 439.2 1.4 21.1 19-.7L188 438z"
                                          style="mix-blend-mode:multiply;fill:url(#New_swatch_26348)"/>
                                    <path d="m188.1 466.6-1.4 10.6-18.6-1 .3-15.3v-.6l17.6-.6 2 4.4z"
                                          style="fill:url(#New_swatch_26349)"/>
                                    <path d="M188.1 466.6c-3.3 1.1-6.8 1.5-10.1.5-3.7-1.1-6.6-3.7-9.6-6.3v-.5l17.5-.7c1.2 5 1.5 3.2 2.1 4.4v2.5Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient220)"/>
                                    <path d="m189.7 460 1.1 18.3-4.3-1.1-.6-17.6z"
                                          style="fill:url(#linear-gradient221)"/>
                                    <path d="m168.1 476.2 2.6.9 20.1 1.2-4.3-1.1z"
                                          style="fill:url(#New_swatch_2694)"/>
                                    <path d="m189.8 457.7-20.6 1.9-.2-1.7-.1-.6-1.9-16-.1-1h1.7l3.4-.2 4.6-.1 3-.2 4.7-.1 3.7-.2.5 5.3.1.1z"
                                          style="fill:url(#New_swatch_194)"/>
                                    <path d="M177.6 449.3c0-2-.6-4.7-2-6.2-1-1.1-1.8-2.1-3.6-2.6h3.3a3.3 3.3 0 0 1 3.7 2.8c.2 1.9-.4 4.3-1.4 6"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient222)"/>
                                    <path d="m189.8 457.7-20.6 1.9-1.4-1.2c.2 0 .6-.2 1.2-.5 1.3-.7 3.5-2 5.8-3 5.9-2.5 5.1-13.6 4.7-15.1l4.8-.2h3.7l.5 5.2 1.2 12.8Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient223)"/>
                                    <path d="M176.3 449.6c.1 1.5 0 2.9-.4 4.2-1 3.5-3.7 6-6.9 6.2-2.9.2-5.7-1.5-7.3-4.3-.8-1.4-1.4-3.1-1.5-5-.4-5.5 2.9-10.1 7.4-10.4 3.3-.2 6.4 2 7.9 5.4.5 1.2.9 2.5 1 4Z"
                                          style="fill:url(#New_swatch_2614)"/>
                                    <path d="M173.6 449.8c.3 4.1-2 7.7-5.3 7.9-3 .2-5.6-2.5-6.3-6.1 0-.3-.1-.7-.1-1-.3-3.7 1.6-6.9 4.3-7.7.3 0 .7-.2 1-.2 3.2-.2 6.1 3 6.4 7.1"
                                          style="fill:url(#linear-gradient224)"/>
                                    <path d="M173.6 449.8c.3 4.1-2 7.7-5.3 7.9-3 .2-5.6-2.5-6.3-6.1.3.1.6.3.9.4 3 .8 6.4-.7 7.6-3.4.6-1.3.6-3.1-.5-4s-2.8-.9-3.9-1.7c.3 0 .7-.2 1-.2 3.2-.2 6.1 3 6.4 7.1Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient225)"/>
                                    <path d="M175.9 453.7c0-2.1 0-4.3-.7-6.3s-2-3.9-3.9-5.1a7 7 0 0 0-6.3-.5c-2.2 1.1-3.4 3.4-3.7 5.8s.2 4.7.6 7.1v.8c0 .1-.1.3-.3.3-.9-1.5-1.5-3.2-1.6-5.1-.4-5.5 2.9-10.1 7.4-10.4s8.5 3.9 8.9 9.4c.1 1.5 0 2.9-.4 4.2z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient226)"/>
                                    <path d="M176.3 449.6c.1 1.5 0 2.9-.4 4.2-1 3.5-3.7 6-6.9 6.2-2.9.2-5.7-1.5-7.3-4.3.2.2.4.3.5.5 4.8 6.4 14.4 3.2 13.3-9.1 0-.5 0-.9-.1-1.4.5 1.2.9 2.5 1 4Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient227)"/>
                                    <path d="M88.8 177.2c4.5 11.3 9.8 22.3 15.9 32.8.1-5.8-1.8-11.4-4.7-16.4s-6.6-9.4-10.3-13.8c.7 1.1 2.9.4 2.8-1-.1-1.3-2.3-1.7-2.9-.5 12.4 8.2 27.7 12 42.6 10.7-14.2-3.4-28.4-6.8-43.4-11.8"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient228)"/>
                                    <path d="M101.7 187.4c8.6 9 21.8 17 33.9 12.7-10.7-2.6-21-7-33.9-12.7"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient229)"/>
                                    <path d="M476 275.3c4.2-.8 8-1.7 12.3-1.4 1.6.1 3.6-.6 3.6-2.5-4.6 1.9-14.4 1.9-14.4 1.9s-2.2 1.7-1.5 2"
                                          style="fill:url(#New_swatch_26461)"/>
                                    <path d="M161.5 76.7c-1.9.9-3.9 1.4-5.9 1.7-9 .9-21-4.9-30.3-1.8-6.7-2.1-13.3-5.3-13.3-11.8 1.3 1.7 4.5 1.8 8.2 1.2 5.3-.8 11.7-3 15.6-4.3 1.8-.6 3.8-1.4 4.8-3 0-.1.2-.3.2-.4v-.1c1.1-2.5-.5-5.4-2.2-7.6-1.7-2.3-5.5-5.5-2.6-7.7 0 0 12-2.1 14.5 1.9 3.1 4.8 3.4 10.8 4.1 16.5s12.7 11.6 6.6 15.4Z"
                                          class="st476"/>
                                    <path d="M161.5 76.7c-1.9.9-3.9 1.4-5.9 1.7 0-.3.1-.6.1-1 0-2.7-2.2-4.8-4.4-6.3s-4.8-2.9-5.9-5.3c-.5-1.1-.7-2.4-1.1-3.5-.7-1.6-2-2.8-3.3-4 1.1-2.5-.5-5.4-2.2-7.6-1.7-2.3-5.5-5.5-2.6-7.7 0 0 12-2.1 14.5 1.9 3.1 4.8 3.4 10.8 4.1 16.5s12.7 11.6 6.6 15.4Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient230)"/>
                                    <path d="M198.6 60.4c-1.8-.2-3.6-.4-5.4-.5a75 75 0 0 0-34 6.3c-1.4.6-2.7 2.3-2.7 2.3s-5.9-4.3-7.5-12.5c-1.1-5.8-10.2-6.5-12.7-13.2l1.9-1.3c7.1-4.7 14.9-8.3 23.1-10.9 9.2-2.9 18.8-4.4 28.4-4.3 1.5 0 3.2 0 4.5.9.3.2.5.4.8.6 1.4 1.5 1.7 3.9 1.9 6.1.6 8.8 1.3 17.6 1.9 26.4ZM125.3 76.5c-4.1.8-7.5.2-14-2.1-8.7-3.1-16-1.9-25.3-1.6.5-.5 1-.9 1.5-1.3 5.5-4.3 12.7-5.9 19.8-6.9 1.4-.2 2.7-.4 4.1-.5 7.8 3.9 10.9 7.8 13.8 12.4Z"
                                          class="st476"/>
                                    <path d="M159.8 44.8c-1.2 2-.4 4.6-.5 6.9-.1 1.4-.6 2.8-.7 4.2 0 1.4.5 3 1.8 3.6-2.7 1.5-6.3 3.4-7.4.8-2.1-4.7-.4-5.5-4.5-9.6-3.1-3.1-10-4-10-8.8-.1 0-.3-.2-.4-.3 7.1-4.7 14.9-8.3 23.1-10.9q9.3.3 18.3 2.7c2.8.7 8.1 4.2 5 4.7-6.9.4-13.7 1.7-20.3 3.9-1.7.6-3.5 1.3-4.4 2.8"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient231)"/>
                                    <path d="M190.8 43.5c-1.6-2.1-4.8-1.7-7.4-1.5s-5.4 1.1-7.2 3c-2.4 2.6-2.9 6.4-3.2 9.9 0 .3 0 .6.1.9.2.3.7.3 1.1.3 4-.4 8-.7 12-1.1 1.5-.1 3.2-.3 4.4-1.3 1.6-1.2 2.1-3.4 1.8-5.3s-.4-3.4-1.6-4.9"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient232)"/>
                                    <path d="M148.7 73.7c-.7 1.3-2.5 1.1-3.9.7-5.4-1.4-10.8-2.7-16.1-4.1-1.8-.4-3.5-.9-5.1-1.8-1.2-.7-2.3-1.6-3.3-2.6 5.3-.8 11.7-3 15.6-4.3 1.8-.6 3.8-1.4 4.8-3 1.2 1.2 1.8 2.9 2.3 4.5.6 2.1 1.1 4.3 2.6 5.7.7.7 1.7 1.2 2.4 1.9s1.2 1.9.7 2.8Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient233)"/>
                                    <path d="M117.1 70.6c-2.5 1.1-5.4.9-8.1.4s-5.4-1.3-8.1-1.2c-4.5.1-9 2.6-13.3 1.8 5.5-4.3 12.7-5.9 19.8-6.9 0 0 0 .1.1.2 1 1.3 2.5 2.1 4 2.9 1.8 1 3.6 1.9 5.4 2.9Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient234)"/>
                                    <path d="M183.3 40.1c-3.2-.5-6.4 1-8.6 3.3s-3.4 5.4-4 8.5c-.2 1.2-.4 2.5-1.2 3.5-1.2 1.6-3.6 1.8-5.6 1.9-.8 0-1.7 0-2.3-.6-.9-.9-.2-2.4.3-3.6.8-2 .9-4.2.3-6.3-.2-.8-.6-1.7-.2-2.4.2-.4.6-.7 1-1 4.4-2.9 9.9-4.2 20.3-3.4Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient235)"/>
                                    <path d="M193.9 59c2.2-3.2 2.7-7.5 1.9-11.3-.9-3.8-3-7.3-5.6-10.2-1.3-1.4-2.7-3.3-1.8-5 1-1.8 3.8-1.4 5.4-2.7.6-.5.9-1.1 1.1-1.8 1.4 1.5 1.7 3.9 1.9 6.1.6 8.8 1.3 17.6 1.9 26.4-1.8-.2-3.6-.4-5.4-.5.3-.3.5-.6.7-1Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient236)"/>
                                    <path d="M174.7 35.2c-4.5-1-9.1-2.1-13.6-1.1-2.6.6-5 1.8-7.3 3-3 1.5-6 3.1-9 4.6-.6.3-1.1.6-1.5 1.1s-.6 1.2-.2 1.7c.2.4.6.6 1 .7 3.4 1.7 6.9 3.4 10.3 5.1-.5-2.2-.9-4.7.4-6.6.8-1.1 2-1.8 3.2-2.4 4.6-2.3 9.5-4.1 16.8-6.2Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient237)"/>
                                    <path d="M188.6 44.6c-2-1.4-4.8-1.2-7 0-2.2 1.1-3.8 3-5.4 4.9.8.9 2.2.7 3.4.5 1.9-.3 3.8-.7 5.7-1 .9-.2 1.8-.3 2.6-.7s1.6-1 .6-3.6Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient238)"/>
                                    <path d="m223.9 87 .5 5.6-45.8 4.1-.5-5.6c0-.7 10.1-2.2 22.8-3.4 12.6-1.1 22.9-1.4 23-.7"
                                          style="fill:url(#New_swatch_27753)"/>
                                    <ellipse cx="201.5" cy="94.6" rx="23" ry="1.3"
                                             style="fill:url(#New_swatch_27754)"
                                             transform="rotate(-5.1 200.53 94.43)"/>
                                    <path d="m222.8 92.8-.2 1-3.7 23.9-30.5 2.7-5-14.7-2.8-8.2-.3-1c.5-.1 1.1-.2 1.8-.4.5-.1 1.2-.2 1.8-.3h.3c.3 0 .6 0 1-.1h.6c.8-.1 1.7-.2 2.6-.4.5 0 1-.1 1.5-.2.4 0 .9-.1 1.3-.2h.7l3.1-.3c.5 0 1-.1 1.5-.2.3 0 .7 0 1.1-.1.6 0 1.1-.1 1.7-.2.5 0 1.1-.1 1.7-.2h1.6c.7 0 1.3-.1 2-.2.7 0 1.4-.1 2.1-.2 1.1 0 2.2-.2 3.3-.2h1.5c.7 0 1.3 0 1.9-.1h9.5Z"
                                          style="fill:url(#New_swatch_26350)"/>
                                    <path d="m196.5 119.8-8.1.7-5-14.7c2 3.9 4.3 7.6 6.8 11.3-.6-2.9-1.9-6.3-2.5-9.2 0 .9.1 2.1 0 3.2-1.1-3.5-1.8-8-2.9-11.5 0 0 3.9 8.3 6 12-1.1-3.5-2.2-6.9-3.4-10.4 0 .3.1 1.9.1 2.2-.8-2.1-1.7-4.9-2.4-7.7 1-.1 2-.3 3.2-.4.5 0 1-.1 1.5-.2.4 0 .9-.1 1.3-.2z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient239)"/>
                                    <ellipse cx="203.7" cy="119.1" class="st364" rx="15.3" ry=".9"
                                             transform="rotate(-5.1 202.85 118.15)"/>
                                    <path d="M195.7 119.8h-.8l-6.6-24.6c.5 0 1-.1 1.5-.2l5.8 24.8Z" class="st383"/>
                                    <path d="m202.5 93.7 2.2 25.3h-1l-3-25.1h1.6Z"
                                          style="fill:url(#New_swatch_2653)"/>
                                    <path d="m216.3 92.8-2.1 25.4h-.7l1.1-25.3h1.7Z"
                                          style="fill:url(#New_swatch_2654)"/>
                                    <path d="M202.6 102c.5 5.7 1.1 11.4 1.6 17l-5 .4c-.5-4.4-.9-8.7-1.4-13.1.9 2.6 2 5.1 3.4 7.6 0-4.7-.2-9.3-.8-13.9.1 1.4 0 2.8-.1 4.2L199.1 94c.5 0 1.1-.1 1.7-.2h1.2c0 2.8.3 5.5.6 8.3Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient240)"/>
                                    <path d="M215.1 107.4c-.1 3.6-.4 7.2-.8 10.7l-5.3.5c-.4-4.1-.9-8.3-1.3-12.4.6 1.5 1.3 3.1 1.9 4.6 1-4.4 1.4-8.8 1.2-13.3-.4 1.2-.7 2.4-1.1 3.7.3-2.7.5-5.4.5-8 1.1 0 2.1-.1 3-.2-.3 6.8-.5 13.6-.8 20.3.6-1.2 1.1-2.5 1.7-3.7z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient241)"/>
                                    <path d="M214.3 118.2h-.7l-4.6.4z" class="st395"/>
                                    <path d="m217.1 95.7-1.2 15.4c.7-2 1.5-4 2.2-5.9.3 4.2.1 8.5-.5 12.7l-4 .4.6-8.7c.4-5.6.7-11.1 1.1-16.7h5.4c-.4 3.2-.8 6.5-1.3 9.7-.8-2.2-1.5-4.5-2.3-6.7Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient242)"/>
                                    <path d="M194.9 94.5c.9 8 .8 11.9 1.7 19.9l-4.8-19.5 3.1-.3Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient243)"/>
                                    <path d="m197.5 94.2.6 11.3c-.5-3.7-1.1-7.4-1.6-11.2.3 0 .7 0 1.1-.1Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient244)"/>
                                    <path d="m183.9 95.9 3.2 15.3-5.1-15c.5-.1 1.2-.2 1.8-.3Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient245);opacity:.5"/>
                                    <path d="M204.4 93.6c.7 0 1.4-.1 2.1-.2l.6 22.7-2.7-22.6Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient246)"/>
                                    <path d="m220 92.7-2.8 13 .7-12.9h2.1Z"
                                          style="mix-blend-mode:screen;opacity:.5;fill:url(#linear-gradient247)"/>
                                    <path d="m223.9 87 .2 2.7c-15.2-1.1-30.7.6-45.8 3.6l-.2-2.2c0-.7 10.1-2.2 22.8-3.4 12.6-1.1 22.9-1.4 23-.7"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient248)"/>
                                    <path d="m67.9 314.1-4.2 4.5c.3.2.7 0 1-.1s.5-.5.7-.8c.9-1.2 1.7-2.4 2.4-3.5Z"
                                          style="fill:url(#New_swatch_26462)"/>
                                    <path d="M66.1 317.7c-.4-2.1-1.3-4-2.8-5.6q.3-.15.6 0c.3.15.3.2.5.4 1.3 1.5 2.1 3.4 2.2 5.3-.3 0-.5 0-.5-.1"
                                          style="fill:url(#New_swatch_26463)"/>
                                    <path d="M81.3 170.6a8 8 0 0 1-3.1-2c2-.1 4 .8 3.1 2"
                                          style="fill:url(#New_swatch_26464)"/>
                                    <path d="M78.3 172.4c0 .3.3.6.6.7s.7-.2.9-.4.4-.6.5-.9c.2-.6.5-1.2.7-1.7.1-.2.2-.5.2-.8s-.3-.5-.6-.4c.1 1.2-.3 2.5-1.2 3.3-.2.2-.4.3-.7.3s-.4-.3-.4 0Z"
                                          style="fill:url(#New_swatch_26465)"/>
                                    <path d="M134.2 241.7c-.6.7-.7 1.6-.8 2.5-.2 2.3-.4 4.6.3 6.7.1.4.2.7.5 1s.6.5 1 .4c.5-.1.8-.7.9-1.2.8-2.8.5-5.9-.7-8.5.7 2.4 1 5 .7 7.5 0 .3 0 .7-.3.9s-.6.4-.9.3c-.2-.1-.3-.4-.4-.6-1-2.7-1.1-5.8-.4-8.6-.1 0-.2-.1 0-.4Z"
                                          style="fill:url(#New_swatch_26466)"/>
                                    <path d="M128.8 242.3c0 1.1.9 2 2 2l170.5-1.8c1.2 0 1.9-1.3 1.3-2.3-.3-.5-.8-.8-1.3-.8l-170.5.9a2 2 0 0 0-2 2"
                                          style="fill:url(#New_swatch_26722)"/>
                                    <path d="M142.4 134c.2.8.9 1.3 1.7 1.4l119.2 5.4c1 0 1.8-.9 1.5-1.9-.2-.7-.7-1.1-1.4-1.2l-119.1-6c-1.3 0-2.2 1.1-1.9 2.3"
                                          style="fill:url(#New_swatch_26723)"/>
                                    <path d="M135.7 379.3h1.3c0-.1.6-.2.6-.2h.8l121.7-10.5c6.3-1.6 12.4-3 18.2-4.4l-134.8 10.3-6.9.5h-1.3c-1 0-1.9.7-2.2 1.6-.4 1.4.9 2.8 2.6 2.6Z"
                                          style="fill:url(#New_swatch_26724)"/>
                                    <path d="M135 377.3c.7-.3 1.4-.5 2.1-.7.2 0 .4-.1.6-.2 1.9-.7 3.9-1.3 5.9-1.9 42.8-13.4 99.6-17.1 149.3-13.6a631 631 0 0 1 39.3-7.6c3.8-.6 7.6-1.1 11.3-1.6 6.4-19.9 8.7-35.8 5.2-50.7-.6-2.5-1.4-5.1-2.3-7.6-4-10.7-11.3-21.2-22.5-32.6-5.9-6-12.9-12.3-21.1-19-.7-.6-1.5-1.2-2.2-1.8-.2-.2-.4-.4-.7-.5-.2-.2-.5-.4-.7-.6 0 .2-.2.4-.2.6v.2c-.5 1-1.1 2-2 2.8-7.5 7.4-32 7.6-122.6 1.3-10.4-.7-21.6-1.5-33.8-2.4h-.3c.4.4.7.8 1.1 1.2.4.5.9 1 1.3 1.5 13.2 15.9 21.4 35.9 23.4 56.4.2 2.1.4 4.2.4 6.3.8 23.1-15.6 47.6-29.6 68.1-.1.2-.2.3-.4.5-.4.6-.8 1.2-1.2 1.7Z"
                                          class="st476"/>
                                    <g class="st271">
                                        <path d="m208.8 299.2-1.6.9-11 5.6-.8 1 1.2 4.9-.5 1.2 12 6.1 12 5.8L232 331l12 6 .5-.9-1-8.1-1-.3-11.9-5.6-11.3-6.9-12.3-4.9-.4-1.1.2-1.5 7.6-2.7.5-1.4z"
                                              class="st297"/>
                                        <path d="m235.4 283.1-.1.2-.5 2.4.2.7-13.9 6.8.2 1.3 7.8 3.2-.1-.6 8.3-2.2-.6.4 5.1 13.5 4.2 13.8 5 13.6.1.9 7.5-.1v-.8l-3.8-13.4-5.4-12.8-1.2-14.2-5.2-12.9-1.2-.7z"
                                              style="fill:url(#New_swatch_1633)"/>
                                        <path d="m247.5 267.3-1.7.5 4.5 13.9 7.6 12.8 4.4 13.9 5.6 13.5 4.7 13.8-1.4-.9 6.5 1.7.7-.6 1.1-3-1.5.1 13.1-7.7 13.3-7.5 14.8-4.3v-2.1l1.8-4.9-3.1.6-12.4-7.8-13-6.7-13.7-5.1-12.4-8 .3 1.3 2.2 7.4-1.8 2.1 14.6 3.8 13.1 6.9 12.7 7.8 1 .2-1.3-.3-15.4 9.1-16.7 6.6-1.3.3-5.1-14.3-3.5-14.9-5.6-14.1-4.6-14.5h-1z"
                                              style="fill:url(#New_swatch_1634)"/>
                                    </g>
                                    <path d="M348.6 300.9c-1.2 6.9-3.7 14.4-7.1 22.2-1.6-1.4-4.2-.7-5.7.8-1.5 1.4-2.4 3.4-3.6 5.2-3.7 5.3-10.7 7.5-17.1 7.2-3.8-.2-7.4-1.1-11-2.4-2.5-.9-5-2-7.5-3-5.9-2.6-11.9-5.4-18.2-6.3-8.4-1.2-17 .8-25.2 3.2-10.4 3-20.7 6.4-30.9 10.4-10 3.8-19.7 8.1-29.3 12.8-2.6 1.3-6.1 2.4-7.9 0-1.6-2.1 0-5.2 1.7-7.3l10.6-13.9c3.9-5.1 7.8-10.2 11.8-15.4 4.2-5.4 8.5-11.3 9-18.1.4-5.9-2.2-11.3-5.9-15.9s-8.9-8.1-13.3-12.1c7.2 3.9 15.5 7.9 26 9.9-13.1-9.6-45.3-23.9-45.3-23.9s47.9 5.9 63.2 10.4c23.8 7.1 20.9-2.8 38.7.1 7.4 1.2 11.7-4.2 17.7-8.7s18.9 2.7 24.7 4.4c11.2 11.4 18.5 21.9 22.5 32.6.9 2.5 1.7 5 2.3 7.6Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient249)"/>
                                    <path d="M326.3 309.2c-6.5 4.3-12.1 10-16.4 16.6-.4.6-.8 1.3-.7 2.1.1 1.2 1.4 1.9 2.5 2.3 4 1.4 8.3 1.5 12.3.3 3.4-1 6.7-3.1 8.6-6.1s2.5-7 .9-10.2-5.8-5.9-7.2-4.9Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient250)"/>
                                    <path d="M328.2 301.2c-2.1 3.9-7.2-.8-14 7.5-2.3 2.8-6.6 12-7.7 12.4-15.6 5.2-26.6-4.7-42.6-1.4-14.5 3-28.3 9-41.9 14.9-15.9 5.6 26.5-24.9 33.3-37.1 7-12.6-22.2-22.8-40.7-33.4 17.5 0 37.3 11.4 50.8 11.4 9.2 0 13.6-7.6 17.7-7.1 29.6 3 14.3-16.3 30.7.1 11.4 11.4 17.7 26.9 14.4 32.7"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient251)"/>
                                    <path d="M135 377.3c.7-.3 1.4-.5 2.1-.7.2 0 .4-.1.6-.2 1.9-.7 3.9-1.3 5.9-1.9 42.8-13.4 99.6-17.1 149.3-13.6a631 631 0 0 1 39.3-7.6c3.8-.6 7.6-1.1 11.3-1.6 6.4-19.9 8.7-35.8 5.2-50.7-.6-2.5-1.4-5.1-2.3-7.6-.9 8.6-3.6 16.8-9.1 23.5-.9 1.1-1.8 2.1-2.8 3.1-5.3 5.2-12 8.7-19.3 11.1-3.6 1.2-7.3 2.1-11.1 2.9-5.3 1.1-10.7 1.8-15.9 2.5-10.2 1.3-20.6 2.6-31 3.2-10.2.6-20.3.5-30.2-.8-1.6-.2-3.1-.5-4.6-.7-7-1.3-13.9-3.2-20.5-6.1-1.5-.7-3-1.4-4.4-2.1-12.9-6.7-23.8-17-31.5-29.3.2 2.1.4 4.2.4 6.3.8 23.1-15.6 47.6-29.6 68.1-.1.2-.2.3-.4.5-.4.6-.8 1.2-1.2 1.7Z"
                                          class="st176"/>
                                    <path d="M297.1 339.1c8.3 5.3 16.6 10.6 24.9 15.8 3.4-.6 6.8-1.2 10.1-1.7-.7-6.4-3.5-12.8-8.9-17.4.7 4.7 1.4 9.4 2 14.1.2 1.2.2 2.7-1 3.2-1.4.6-3.1-.5-4.3-1.5-6.5-5.5-13.5-10.5-21-14.9-1.1-.6-2.6-1.2-3.3-.4-.8.9.5 2.1 1.6 2.8Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient252)"/>
                                    <path d="M300.5 239.9c-37.3-6.7-72.2-4.4-165.3.3h-.2c8.6-17.1 13.7-31.7 18.6-50.2s5.9-38.6-.7-56.6c30.7 5.3 60.2 10.6 90 10 5.8-.1 12.1-.7 16.5-4.5 6.9 6.9 12.7 14.3 17.7 22.2 8.4 13.4 14.3 28.1 18.6 43.6.8 3.1 1.6 6.1 2.3 9.2 1.7 7.5 1.3 18.2 2.5 25.9Z"
                                          class="st476"/>
                                    <path d="M295.7 204.8c0 1.5-.4 3-1.5 3.9-1.3 1.1-3.8.4-3.7-1.2-5.2 3.1-11.6 3.4-17.6 2.6-6-.9-11.7-2.8-17.7-3.8-20.5-3.7-41.3 2.7-62.1 3.8h-2c-4.5.2-8.9 0-13.3-.4-.6 0-1.3-.2-1.6-.8-.3-.7.2-1.4.7-2 2.6-3.1 5.2-6.1 7.9-9.2 2.5-2.9 5-5.9 6.4-9.4 1.8-4.5 1.7-9.7.5-14.4-1.2-4.8-7.7-15-5-12.9 3.6 2.8 19.9 12.5 25.5 9.1 2.7-2.4-1.8-8.1-4.7-11s-6.7-4.7-10.6-6c8.4 1.3 17 2.1 25.5 2.2 12.5.1 25.5-1.2 36.2-7.5-1.7 2.8-3 5.8-3.8 9-.2.8-.3 1.6 0 2.3s1.2 1.3 1.9 1c.6-.3.8-1.1.9-1.7.6-3 1.1-6 1.7-9.1 3.3 8.8 7.1 18.2 15 23.5q1.35.9 3 .9c2.2.1.7-8.4-.2-12.4 2.8 4.5 5.3 9.1 7.6 13.8 3.1 6.4 5.7 13 7.9 19.7 1.1 3.3 2.1 6.6 3 10Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient253)"/>
                                    <path d="m289.5 194.7-40.4-3c-9-.7-18.4-1.3-26.8 2-10.4 4-18.5 13.6-29.2 16.3-.7.2-1.4.3-2.1.4v-.3c.9-4.4 5-7.5 8.7-10.2 3.7-2.8 7.7-6.6 7.4-11.3-.3-5.8-6.8-9.3-9-14.8 4.6.8 9.2 1.5 13.7 2.3 1.2.2 5.1.2 6.9-1.9s1.5-5.6-.4-7.6c-.8-.9-1.9-1.6-2.7-2.5s-1.3-2.4-.6-3.4c.7-1.2 2.4-1.3 3.9-1.2 8.9.4 17.8.8 26.7 1.3 1.5 0 3.2.2 4.4 1.1 1.9 1.5 2.6 5 5 5s3.5-3.6 5.9-3.8c1.2-.1 2.4.8 3 1.8.6 1.1.9 2.3 1.3 3.5 1.7 5.4 6.8 9.8 12.4 9.8 2.6 0 2-1.5 3.9-3.3 4 6.1 9 20 7.9 20Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient254)"/>
                                    <path d="M300.5 239.9c-59-7.6-108.3-16.6-165.3.3 7.5-13.2 15.1-26.5 22.6-39.7-.4 2.4-5.3 17.9-4 19.9 2.3 3.7 12-7.1 16.4-6.5 4.3.6 8.8 0 13.1-.5 29-3.6 58.4-4 87.6-5.4 2.3-.1 4.6-.2 6.6-1.2 2.1-.9 3.8-2.9 3.8-5.1 0-1.5-.7-2.9-.7-4.4s1.1-3.2 2.6-2.8c.6.2 1.1.7 1.5 1.3 4.7 5.9 9.1 12 13.3 18.3 1.7 7.5 1.3 18.2 2.5 25.9Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient255)"/>
                                    <path d="M150.5 247.2c17.1 4.6 34.7 9.4 49.1 19.7-17.3-1.5-34.2-8-49.1-19.7"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient256)"/>
                                    <path d="M162.1 365c30.8-21.1 68.9-31.1 106.1-28-35.4 8.3-70.6 17.9-106.1 28"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient257)"/>
                                    <path d="M299 242.7c-1 3.3-4 5.6-7.2 6.8s-6.7 1.3-10.1 1.4c-19.7.8-39.4 1.3-59.1 1.8 18.3 2.4 36.8 4.7 55 1.8 8.4-1.3 22-4.9 21.3-11.8Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient258)"/>
                                    <path d="M147.8 245.5c5.7 7 11.9 13.6 18.5 19.8 2.8 2.7 5.8 3.7 6.5 3s-1.4-3.2-3.8-5.8c-4.9-5.2-11.9-10.9-17-15.8 20.3 1.9 37.5 9.5 44.5 6.2-9.4-6.8-47.9-6.7-48.6-7.4Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient259)"/>
                                    <path d="M147 366.6a162 162 0 0 0 29.4-50c2.2 4.6 1.9 10.2.3 15s-4.6 9.2-7.7 13.3c-6.9 9.2-14.7 17.8-21.9 21.7Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient260)"/>
                                    <path d="M163.4 142.4c-1.4-1.7-2.7-3.5-4.1-5.2 3.9 8.6 11.2 15 16.8 22.6 4.7 6.4 8.2 13.5 11.7 20.6 1.8-5.6.3-11.9-2.8-17-3-5.1-7.5-9.1-11.9-13.1-4.4-3.9-9-7.8-9.7-7.9"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient261)"/>
                                    <path d="m168.3 140.5-5.2-2.4c10 7.2 21.8 12 34.1 13.6-10.2-3.4-20.5-7.4-28.9-11.3Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient262)"/>
                                    <path d="M258 144c-2.4 1.3-5 2.3-7.6 3-4.9 1.2-10 1.3-15 1.4-10.6.1-21.2.3-31.8.4 16.2 3.5 33 1.3 49.4-.9 1.4-.2 2.9-.4 4.1-1.1s2.2-2 .9-2.9Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient263)"/>
                                    <path d="M261.3 145.9c6.3 6.7 11.2 14.7 14.4 23.3-4.3-2.6-8.2-6-10.8-10.2a26 26 0 0 1-3.6-13.1"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient264)"/>
                                    <path d="M294.1 227.4c-17-4.9-30-20.4-47.4-22.9 14.2 11 31 18.5 47.4 22.9"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient265)"/>
                                    <path d="M167.4 258.5c-2.4-1.5-4.7-2.9-7.1-4.4 15.2 11.4 30.3 22.9 45.5 34.3.9.7 2.3 1.4 3.2.7s.6-2.1.1-3.1c-3.4-7.6-11.3-12.2-19-15.5s-15.1-7.3-22.7-12"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient266)"/>
                                    <path d="M168.6 165.9c-2.7-9.3-6.9-18.2-12.2-26.3 4.1 5.7 8.3 11.4 12.4 17.1 1 1.4 2 2.8 2.2 4.5s-.8 3.6-2.4 4.8Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient267)"/>
                                    <path d="M170.1 144.2c-2-1.3-4.1-2.6-6.1-3.9 5.5 4.6 11.1 9.2 16.6 13.9 3.3 2.7 6.7 5.5 10.7 7 4 1.4 8.9 1.2 12.1-1.6-12.1-4.4-24.2-9.5-33.3-15.3Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient268)"/>
                                    <path d="M173.4 164.9c-.5 10.8-6.4 36.9-19.4 51.6 7.6.7 14.9-4.6 18.5-11.4s4.6-17 4.3-24.7-2.9-22.8-3.3-15.5Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient269)"/>
                                    <path d="M132.7 240.2c.9.3 1.4 1.1 1.6 2s0 1.4 0 2.3c1.1 0 .6-1.2.4-2s-.7-1.5-1.1-2.2c-.1-.2-.2-.4-.4-.5s-.4-.2-.4.4Z"
                                          style="fill:url(#New_swatch_26467)"/>
                                    <path d="M134 240.1c.8.9 1.6 1.8 1.9 2.9 0 .5 0 1-.4 1.2.1.1.3.2.5.3s.4 0 .5-.1.1-.4 0-.6c-.3-1.6-1.2-3.1-2.6-4v.3Z"
                                          style="fill:url(#New_swatch_26468)"/>
                                    <path d="M142.7 243.1c-3.2-.7-4.5-2.1-7.8-2.8-.4 0-3.2.4-3.2 0 0-.3.7-.5 1-.7.9-.4 1.9-.5 2.8-.2.9.2 1.8.6 2.7 1.1 2 1 4.1 2 4.5 2.7Z"
                                          style="fill:url(#New_swatch_26469)"/>
                                    <path d="M154.8 135.1h.3c-1-1.9-2.5-3.6-4.2-5.1-.2-.2-.5-.3-.7-.2-.2 0-.3.4-.3.6s.2.4.4.6l5.2 5.8c0-.3 0-.6-.7-1.7"
                                          style="fill:url(#New_swatch_26470)"/>
                                    <path d="M156.2 136.4c-1.4-1.7-2.4-3.7-3-5.8 1.2.7 2 1.9 2.5 3.1s.8 2.6.5 2.7"
                                          style="fill:url(#New_swatch_26471)"/>
                                    <path d="M260.1 140.3c-.3-1.4-1-2.6-2-3.6.9.4 1.9.8 2.6 1.6s.8 2.1-.6 2"
                                          style="fill:url(#New_swatch_26472)"/>
                                    <path d="M136.4 375c.7.8 1.4 1.5 1.9 2.4.2.3.4.7.4 1.1s-.2.8-.7.9c-.7.2-1.1 0-1.1 0h.6s1-2.1-2.1-4.1c.3-.3.5-.6.9-.1Z"
                                          style="fill:url(#New_swatch_26473)"/>
                                    <path d="M240.6 373.5c.2 0 .3 0 .5-.1h.3c29-28.8 58.2-67.5 78.7-104.7 1.5-2.7 3-5.5 4.4-8.2 2.1-4 4.1-8 5.9-12 .7-1.4 1.3-2.8 1.9-4.2.1-.3.2-.5.3-.7 0-.1 0-.2.1-.3.2-.5.5-1 .7-1.5s.4-.9.6-1.4c0-.2.2-.4.2-.6.2-.5.5-1.1.7-1.6 1.3-3 2.5-6 3.6-8.9.3-.9.6-1.7.9-2.5.5-1.3.9-2.6 1.3-3.8v-.1.1c-.8 1.1-1.5 2.3-2.2 3.2-.6.9-1.1 1.7-1.3 2.3 0 .1 0 .2-.1.3-1 3-2.1 5.9-3.2 8.9-.2.5-.4 1.1-.6 1.6 0 .2-.2.4-.3.6-.2.4-.3.8-.5 1.2s-.4.9-.6 1.3c0 .1 0 .2-.1.3-.1.3-.3.7-.4 1-.5 1.3-1.1 2.5-1.6 3.8-1.8 4.1-3.8 8.3-5.9 12.5l-4.2 8.1c-20.4 38-50.4 76.1-79.2 105.6Z"
                                          style="fill:url(#New_swatch_26474)"/>
                                    <path d="M383.6 236c29.8 19.9 60.8 33.6 96.4 37.4 1.5-.4 1.5-1.2 1.1-2.3-42.2 0-75.4-21.2-108.9-44.4 5 4.2 10 8.4 11.4 9.3"
                                          style="fill:url(#New_swatch_26475)"/>
                                    <path d="M268.2 118.4c22 45.9 44 91.9 66 137.8 19.4-8.2 45.6-16.1 66-10.8-51-46.4-87.6-77.7-132-127"
                                          class="st476"/>
                                    <path d="M326.3 224.5c-11.8-21-23.5-42-33.2-64 15.2 10.2 29.4 21.8 42.5 34.6-2.7.2-5.1-1.2-7.4-2.6-8.3-5.1-16.7-10.3-25-15.4 10.7 18.4 27.6 32.1 44.2 45.4-8.3-2.8-15.7-7.6-23.1-12.3.4 7.5 6.6 13.4 12.7 17.8 6.2 4.4 13.1 8.4 16.5 15.2l-16.2 2.1c-1.1.1-2.2.3-3.2-.2-1.1-.6-1.6-1.7-2.1-2.8-2.4-5.6-2.5-11.9-5.7-17.6Z"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient270)"/>
                                    <path d="M275.8 364.8c1.3-.3 2.5-.6 3.7-.9 2.2-2.3 4.2-4.8 6.2-7.2 17.5-21.1 34.9-42.2 52.4-63.3l14.2-17.2c-3.4 3.1-7.5 5.8-12.3 12.1-2.3 3-4.5 5.9-6.8 8.8-18.2 23.3-37.3 45.9-57.4 67.7"
                                          style="fill:url(#New_swatch_26476)"/>
                                    <path d="M199.6 123c23.1 28.9 63.2 66.6 91.7 89.6 16.7 10.8 62.9 53.9 103.6 57.1 27.3 4.3 37.9 6.9 81 6.9l2.5-2.5c-22.2 0-48.1 2.2-82.4-5.2-36.5-19.8-70-23.2-133.8-79.2-26.7-23.5-38.4-35.8-62.5-63.9-.6-.8-.8-1.8-.2-2.7s0-.1.1-.1"
                                          style="fill:url(#New_swatch_26477)"/>
                                    <path d="M278.5 171.2"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient271)"/>
                                    <path d="M398.6 270.1c-8.5.5-16.9 2-25 4.5-10.6 3.3-20.7 8.2-29.8 14.5-3.7 2.6-7.1 5.3-10.4 8.4-9.8-21.8-19.1-44.4-34.2-63-15.4-19-15.1-20.6-48.3-56.5 44 40.9 93 66.4 147.7 92.1"
                                          class="st476"/>
                                    <path d="M194.6 26.1c26 34.2 47.2 66.3 76.7 97.5.9.2-1.7-4.2-1.8-3.6-21.8-21.8-48.4-60.8-75.2-96.5-.6 1.4-.7 1.4.3 2.6"
                                          style="fill:url(#New_swatch_26478)"/>
                                    <path d="m260.2 186.2-.3-.3c.1 0 .2.2.3.3"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient272)"/>
                                    <path d="M368.2 268.7c-9.4 2.9-18.4 7.3-26.5 12.9-13.1-16.3-26.3-32.5-39.7-48.6-7-10.9-20.3-23.4-28.3-33.6 11.7 10.2 26.1 21.2 39.5 29 2.5 1.5 9.5 4 8.4 6.7 14.3 12.7 30 24 46.6 33.5Z"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient273)"/>
                                    <path d="M376.8 235.5c-25.9-9-48.4-27.5-62.4-51 20.3 14.6 39.6 30.4 62.4 51"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient274)"/>
                                    <path d="M364.3 234c-11.5-5.6-23-11.1-34.5-16.7 8.3 10.4 20.8 17.3 34.5 16.7"
                                          style="mix-blend-mode:screen;fill:url(#linear-gradient275)"/>
                                    <path d="M383.2 266.2c-21.4-4.8-41.5-15.7-57-31.2 21.1 12.1 42.4 24.2 57 31.2"
                                          style="mix-blend-mode:multiply;fill:url(#linear-gradient276)"/>
                                </g>
                            </g>
                            <path d="M416.4 440.9c-.3-.5-.9-1.1-1.7-1.2-1.6-.2-2.3 2.1-4.2 2.3-1.6.2-2.1-1.5-4.6-2.5-1.8-.8-3.5-.6-5.7-.4-4.2.5-6.7 1.7-9.6 2.8-4 1.4-4.4.7-11.7 2.1-9 1.7-16 4.1-16 4.5 0 .3 4.4-1 10.8-.7 3.7.2 8.5.9 8.5 1.5 0 1.6-46.4 2.6-46.4 4.8 0 .9 9.6 1.1 9.7 2.6.1 2.2-18.9 6.1-38.7 7.7-29.9 2.3-54.2-1.3-54.5.3-.1 1.1 10.7 2.7 10.6 4.2-.1 2.2-20.2 3.7-40.4 2.6-21.2-1.1-39-4.7-39.4-3.1-.2.8 5 2.1 4.9 3-.4 2.6-71.5-10.4-76.1-2.5-.9 1.5-.6 2.8-.6 2.8.8 3.1 6.7 3.9 8.4 4.2 8.7 1.9 16.2 2.4 22.1 2.4 4.4 0 6.1-.3 11.7-.5 10.5-.3 17.9.4 21.8.7 12.8.9 14.7-1 37.1-1.9 31.4-1.2 39 2.1 54.9-2.1 2.2-.6 7-1.9 13.9-2.8 9.4-1.2 13.8-.3 21.8-.3 19.3 0 20-4.9 39-5.5 3 0 9.8-.2 18-3.2 3.4-1.3 3-1.5 6.1-2.7 7.8-3 11-1.5 26.8-3.5 9.4-1.2 4-1.2 10.3-2 3.2-.4 4-1.9 6.8-2.3 3.7-.5 4.8.4 6.6-.7 2.1-1.2 3.9-4.4 2.9-7.2-.8-2.2-2.8-3.2-3.4-3.4Z"
                                  class="st544"/>
                            <path d="M126.2 477.1a208 208 0 0 0-18.5-1.4c-10.1-.4-11.2.3-17.5-.6-5.2-.7-7.9-1.6-14.9-2.3-4.2-.4-7-.4-8.5-.5-4.9-.2-11.8-1.2-21.1-4.7-.5-.2-.3-1 .2-.9 13.5 2.3 18.3 2.3 18.6 1.2.2-.7-1.5-1.6-1.3-2.1.7-1.5 15.6 4.2 15.8 3.5.2-.4-5.8-2.9-5.5-3.6.4-1.3 23.4 5.3 23.9 3.8.2-.7-4.4-2.5-4.1-3.3s4.8 1 11.5.9c5.2 0 6.9-1.3 13.4-1.2 2.3 0 4.1.2 5.4.4.9 3.6 1.7 7.2 2.6 10.8"
                                  class="st544"/>
                            <path d="M347.7 467.6c-15.3 3.7-31.6 7.1-48.8 9.9-38 6.3-73.1 8.6-104.2 8.8 15-.2 32.6-1.8 52-6 10-2.2 19.2-4.8 27.5-7.5-28.4 5.5-60.3 9.9-95.3 11.6-15.3.8-30 1-44.1.7 6.1-.5 13-1.2 20.7-2 4-.4 8.3-.9 13.8-2.5 2.6-.8 4.8-1.6 6.3-2.2a482 482 0 0 1-82.2 4.5q39.75-3.9 39.6-5.7c0-.4-1.8-.7-5.3-1-11.3 1.5-24.7 2.5-39.6 1.9-10.3-.4-19.6-1.5-28-2.9q10.05.45 21 .3c14.4-.2 27.6-1.3 39.7-3 19.6.9 39.2 1.9 58.8 2.8l59.2-1 47.3-4.2 46.3-4.9 32.9-6.6-17.6 8.9Z"
                                  style="fill:#e3fbff;opacity:.4"/>
                        </g>
                    </g>
                </svg>
            </div>
        </section>
        <?php get_template_part('templates/components/quests/quests'); ?>
    </main>

<?php get_footer(); ?>