<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {!! BaseHelper::googleFonts('https://fonts.googleapis.com/css2?family=' . urlencode(theme_option('primary_font', 'Muli')) . ':wght@400;600;700&display=swap') !!}

        <style id="applicationStylesheet" type="text/css">
            .mediaViewInfo {
                --web-view-name: home -des;
                --web-view-id: home_-des;
                --web-scale-on-resize: true;
                --web-enable-deep-linking: true;
            }
            :root {
                --web-view-ids: home_-des;
            }
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                border: none;
            }
            #home_-des {
                position: absolute;
                width: 1920px;
                height: 3031px;
                background-color: rgba(252,243,231,1);
                overflow: hidden;
                --web-view-name: home -des;
                --web-view-id: home_-des;
                --web-scale-on-resize: true;
                --web-enable-deep-linking: true;
            }
            #Rectangle_84 {
                fill: rgba(255,188,60,1);
            }
            .Rectangle_84 {
                position: absolute;
                overflow: visible;
                width: 1920px;
                height: 927px;
                left: 0px;
                top: 0px;
            }
            #Group_145 {
                position: absolute;
                width: 32px;
                height: 28px;
                left: 83px;
                top: 58.5px;
                overflow: visible;
            }
            #Group_12 {
                position: absolute;
                width: 32px;
                height: 28px;
                left: 0px;
                top: 0px;
                overflow: visible;
            }
            #Rectangle_73 {
                fill: rgba(255,255,255,1);
            }
            .Rectangle_73 {
                position: absolute;
                overflow: visible;
                width: 32px;
                height: 6px;
                left: 0px;
                top: 0px;
            }
            #Rectangle_74 {
                fill: rgba(255,255,255,1);
            }
            .Rectangle_74 {
                position: absolute;
                overflow: visible;
                width: 32px;
                height: 4px;
                left: 0px;
                top: 12px;
            }
            #Rectangle_75 {
                fill: rgba(255,255,255,1);
            }
            .Rectangle_75 {
                position: absolute;
                overflow: visible;
                width: 32px;
                height: 6px;
                left: 0px;
                top: 22px;
            }
            #Group_147 {
                position: absolute;
                width: 107.635px;
                height: 36.161px;
                left: 1735.365px;
                top: 54.419px;
                overflow: visible;
            }
            #Group_144 {
                position: absolute;
                width: 43.018px;
                height: 36.161px;
                left: 64.617px;
                top: 0px;
                overflow: visible;
            }
            #Group_143 {
                position: absolute;
                width: 43.018px;
                height: 36.161px;
                left: 0px;
                top: 0px;
                overflow: visible;
            }
            #Group_142 {
                position: absolute;
                width: 43.018px;
                height: 36.161px;
                left: 0px;
                top: 0px;
                overflow: visible;
            }
            #Group_146 {
                position: absolute;
                width: 46.752px;
                height: 25.964px;
                left: 0px;
                top: 5.318px;
                overflow: visible;
            }
            #Group_125 {
                position: absolute;
                width: 46.752px;
                height: 25.964px;
                left: 0px;
                top: 0px;
                overflow: visible;
            }
            #Mask_Group_7 {
                position: absolute;
                width: 27.406px;
                height: 25.964px;
                left: 0px;
                top: 0px;
                overflow: visible;
            }
            #Polygon_6 {
                fill: rgba(255,255,255,1);
            }
            .Polygon_6 {
                overflow: visible;
                position: absolute;
                width: 12.091px;
                height: 8.061px;
                transform: translate(0px, 0px) matrix(1,0,0,1,34.6606,8.9519) rotate(180deg);
                transform-origin: center;
                left: 0px;
                top: 0px;
            }
            #Ellipse_3 {
                fill: transparent;
                stroke: rgba(255,255,255,1);
                stroke-width: 1px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Ellipse_3 {
                position: absolute;
                overflow: visible;
                width: 27.406px;
                height: 25.964px;
                left: 0px;
                top: 0px;
            }
            #Mask_Group_8 {
                position: absolute;
                width: 1757px;
                height: 524px;
                left: 82px;
                top: 188px;
                overflow: visible;
            }
            #VNFOODPH_MN_N_VIT_NAM_TI_PHILL {
                filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.392));
                left: 318px;
                top: 339px;
                position: absolute;
                overflow: visible;
                width: 1286px;
                white-space: nowrap;
                line-height: 136px;
                margin-top: -24px;
                text-align: center;
                font-family: HCKSPosterRegular;
                font-style: normal;
                font-weight: normal;
                font-size: 88px;
                color: rgba(255,255,255,1);
            }
            #Group_148 {
                position: absolute;
                width: 108px;
                height: 109px;
                left: 906px;
                top: 30px;
                overflow: visible;
            }
            #Ellipse_4 {
                fill: rgba(255,255,255,1);
            }
            .Ellipse_4 {
                position: absolute;
                overflow: visible;
                width: 108px;
                height: 109px;
                left: 0px;
                top: 0px;
            }
            #LOGO-LOGO {
                position: absolute;
                width: 96px;
                height: 96px;
                left: 6px;
                top: 6px;
                overflow: visible;
            }
            #Group_133 {
                position: absolute;
                width: 358px;
                height: 95px;
                left: 578px;
                top: 794px;
                overflow: visible;
            }
            #Group_132 {
                position: absolute;
                width: 358px;
                height: 95px;
                left: 0px;
                top: 0px;
                overflow: visible;
            }
            #Rectangle_87 {
                fill: rgba(4,96,89,1);
                stroke: rgba(255,255,255,1);
                stroke-width: 1px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Rectangle_87 {
                position: absolute;
                overflow: visible;
                width: 358px;
                height: 95px;
                left: 0px;
                top: 0px;
            }
            #Thc_n_qun {
                left: 79px;
                top: 20px;
                position: absolute;
                overflow: visible;
                width: 193px;
                white-space: nowrap;
                line-height: 110px;
                margin-top: -31.5px;
                text-align: center;
                font-family: SFU Function;
                font-style: normal;
                font-weight: normal;
                font-size: 47px;
                color: rgba(255,255,255,1);
            }
            #Group_137 {
                position: absolute;
                width: 359px;
                height: 95px;
                left: 984px;
                top: 794px;
                overflow: visible;
            }
            #Group_132_bh {
                position: absolute;
                width: 359px;
                height: 95px;
                left: 0px;
                top: 0px;
                overflow: visible;
            }
            #Rectangle_87_bi {
                fill: rgba(217,4,4,1);
                stroke: rgba(255,255,255,1);
                stroke-width: 1px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Rectangle_87_bi {
                position: absolute;
                overflow: visible;
                width: 359px;
                height: 95px;
                left: 0px;
                top: 0px;
            }
            #t_n_hng_ln_gim_n_10 {
                left: 62px;
                top: 2px;
                position: absolute;
                overflow: visible;
                width: 229px;
                white-space: nowrap;
                text-align: center;
                font-family: SFU Function;
                font-style: normal;
                font-weight: normal;
                font-size: 47px;
                color: rgba(255,255,255,1);
            }
            #Group_151 {
                position: absolute;
                width: 465px;
                height: 80px;
                left: 266px;
                top: 42px;
                overflow: visible;
            }
            #Rectangle_115 {
                fill: rgba(17,106,5,1);
                stroke: rgba(112,112,112,1);
                stroke-width: 1px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Rectangle_115 {
                position: absolute;
                overflow: visible;
                width: 465px;
                height: 80px;
                left: 0px;
                top: 0px;
            }
            #Hot_ng_10h00_-_23h00 {
                left: 52px;
                top: 22px;
                position: absolute;
                overflow: visible;
                width: 363px;
                white-space: nowrap;
                text-align: center;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 31px;
                color: rgba(255,255,255,1);
            }
            #Deal_tt_hm_nay {
                left: 82px;
                top: 955px;
                position: absolute;
                overflow: visible;
                width: 252px;
                white-space: nowrap;
                line-height: 108px;
                margin-top: -29px;
                text-align: left;
                font-family: SFU Function;
                font-style: normal;
                font-weight: normal;
                font-size: 50px;
                color: rgba(137,5,5,1);
            }
            #Group_190 {
                position: absolute;
                width: 838px;
                height: 259px;
                left: 89px;
                top: 1060px;
                overflow: visible;
            }
            #Rectangle_95 {
                fill: rgba(252,243,231,1);
            }
            .Rectangle_95 {
                filter: drop-shadow(0px 3px 6px rgba(52, 60, 2, 0.251));
                position: absolute;
                overflow: visible;
                width: 856px;
                height: 277px;
                left: 0px;
                top: 0px;
            }
            #comcom_bx {
                filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
                position: absolute;
                width: 247px;
                height: 247px;
                left: 37px;
                top: 12px;
                overflow: visible;
            }
            #B01_-_Cm_sn {
                left: 344px;
                top: 30px;
                position: absolute;
                overflow: visible;
                width: 198px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 27px;
                color: rgba(0,0,0,1);
            }
            #n_65 {
                left: 344px;
                top: 182px;
                position: absolute;
                overflow: visible;
                width: 95px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 38px;
                color: rgba(137,5,5,1);
            }
            #Thnh_phn_Cm_trng_sn_ch_trng_nc {
                left: 344px;
                top: 78px;
                position: absolute;
                overflow: visible;
                width: 462px;
                height: 28px;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 12px;
                color: rgba(0,0,0,1);
            }
            #Rectangle_96 {
                fill: transparent;
                stroke: rgba(31,70,2,1);
                stroke-width: 2px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Rectangle_96 {
                position: absolute;
                overflow: visible;
                width: 225px;
                height: 71px;
                left: 581px;
                top: 170px;
            }
            #n_Thm_mn_b {
                left: 603px;
                top: 189px;
                position: absolute;
                overflow: visible;
                width: 174px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 31px;
                color: rgba(31,70,2,1);
            }
            #Rectangle_99 {
                fill: rgba(252,243,231,1);
            }
            .Rectangle_99 {
                filter: drop-shadow(0px 3px 6px rgba(52, 60, 2, 0.251));
                position: absolute;
                overflow: visible;
                width: 856px;
                height: 277px;
                left: 0px;
                top: 0px;
            }
            #comcom_bx {
                filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
                position: absolute;
                width: 247px;
                height: 247px;
                left: 37px;
                top: 12px;
                overflow: visible;
            }
            #B01_-_Cm_sn_by {
                left: 344px;
                top: 27px;
                position: absolute;
                overflow: visible;
                width: 220px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 30px;
                color: rgba(0,0,0,1);
            }
            #n_65_235 {
                left: 344px;
                top: 182px;
                position: absolute;
                overflow: visible;
                width: 172px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: lighter;
                font-size: 29px;
                color: rgba(111,111,111,1);
            }
            #Thnh_phn_Cm_trng_sn_ch_trng_nc_b {
                left: 344px;
                top: 78px;
                position: absolute;
                overflow: visible;
                width: 462px;
                height: 42px;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 18px;
                color: rgba(0,0,0,1);
            }
            #Rectangle_100 {
                fill: transparent;
                stroke: rgba(31,70,2,1);
                stroke-width: 2px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Rectangle_100 {
                position: absolute;
                overflow: visible;
                width: 225px;
                height: 71px;
                left: 581px;
                top: 170px;
            }
            #n_Thm_mn_b {
                left: 603px;
                top: 189px;
                position: absolute;
                overflow: visible;
                width: 174px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 31px;
                color: rgba(31,70,2,1);
            }
            #Line_1 {
                fill: transparent;
                stroke: rgba(112,112,112,1);
                stroke-width: 1px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Line_1 {
                overflow: visible;
                position: absolute;
                width: 74.897px;
                height: 1px;
                left: 343.091px;
                top: 211.933px;
                transform: matrix(1,0,0,1,0,0);
            }
            #Gim_20 {
                left: 22px;
                top: 20px;
                position: absolute;
                overflow: visible;
                width: 104px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 23px;
                color: rgba(175,0,0,1);
            }
            #Group_191 {
                position: absolute;
                width: 838px;
                height: 259px;
                left: 1005px;
                top: 1060px;
                overflow: visible;
            }
            #Rectangle_95_b {
                fill: rgba(252,243,231,1);
            }
            .Rectangle_95_b {
                filter: drop-shadow(0px 3px 6px rgba(52, 60, 2, 0.251));
                position: absolute;
                overflow: visible;
                width: 856px;
                height: 277px;
                left: 0px;
                top: 0px;
            }
            #comcom_ce {
                filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
                position: absolute;
                width: 247px;
                height: 247px;
                left: 37px;
                top: 12px;
                overflow: visible;
            }
            #B01_-_Cm_sn_b {
                left: 344px;
                top: 30px;
                position: absolute;
                overflow: visible;
                width: 198px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 27px;
                color: rgba(0,0,0,1);
            }
            #n_65_b {
                left: 344px;
                top: 182px;
                position: absolute;
                overflow: visible;
                width: 95px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 38px;
                color: rgba(137,5,5,1);
            }
            #Thnh_phn_Cm_trng_sn_ch_trng_nc_ca {
                left: 344px;
                top: 78px;
                position: absolute;
                overflow: visible;
                width: 462px;
                height: 28px;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 12px;
                color: rgba(0,0,0,1);
            }
            #Rectangle_96_cb {
                fill: transparent;
                stroke: rgba(31,70,2,1);
                stroke-width: 2px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Rectangle_96_cb {
                position: absolute;
                overflow: visible;
                width: 225px;
                height: 71px;
                left: 581px;
                top: 170px;
            }
            #n_Thm_mn_cj {
                left: 603px;
                top: 189px;
                position: absolute;
                overflow: visible;
                width: 174px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 31px;
                color: rgba(31,70,2,1);
            }
            #Rectangle_99_cd {
                fill: rgba(252,243,231,1);
            }
            .Rectangle_99_cd {
                filter: drop-shadow(0px 3px 6px rgba(52, 60, 2, 0.251));
                position: absolute;
                overflow: visible;
                width: 856px;
                height: 277px;
                left: 0px;
                top: 0px;
            }
            #comcom_ce {
                filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
                position: absolute;
                width: 247px;
                height: 247px;
                left: 37px;
                top: 12px;
                overflow: visible;
            }
            #B01_-_Cm_sn_cf {
                left: 344px;
                top: 27px;
                position: absolute;
                overflow: visible;
                width: 220px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 30px;
                color: rgba(0,0,0,1);
            }
            #n_65_235_cg {
                left: 344px;
                top: 182px;
                position: absolute;
                overflow: visible;
                width: 172px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: lighter;
                font-size: 29px;
                color: rgba(111,111,111,1);
            }
            #Thnh_phn_Cm_trng_sn_ch_trng_nc_ch {
                left: 344px;
                top: 78px;
                position: absolute;
                overflow: visible;
                width: 462px;
                height: 42px;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 18px;
                color: rgba(0,0,0,1);
            }
            #Rectangle_100_ci {
                fill: transparent;
                stroke: rgba(31,70,2,1);
                stroke-width: 2px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Rectangle_100_ci {
                position: absolute;
                overflow: visible;
                width: 225px;
                height: 71px;
                left: 581px;
                top: 170px;
            }
            #n_Thm_mn_cj {
                left: 603px;
                top: 189px;
                position: absolute;
                overflow: visible;
                width: 174px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 31px;
                color: rgba(31,70,2,1);
            }
            #Line_1_ck {
                fill: transparent;
                stroke: rgba(112,112,112,1);
                stroke-width: 1px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Line_1_ck {
                overflow: visible;
                position: absolute;
                width: 74.897px;
                height: 1px;
                left: 343.091px;
                top: 211.933px;
                transform: matrix(1,0,0,1,0,0);
            }
            #Gim_20_cl {
                left: 22px;
                top: 20px;
                position: absolute;
                overflow: visible;
                width: 104px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 23px;
                color: rgba(175,0,0,1);
            }
            #Group_192 {
                position: absolute;
                width: 838px;
                height: 259px;
                left: 89px;
                top: 1368px;
                overflow: visible;
            }
            #Rectangle_95_cn {
                fill: rgba(252,243,231,1);
            }
            .Rectangle_95_cn {
                filter: drop-shadow(0px 3px 6px rgba(52, 60, 2, 0.251));
                position: absolute;
                overflow: visible;
                width: 856px;
                height: 277px;
                left: 0px;
                top: 0px;
            }
            #comcom_cv {
                filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
                position: absolute;
                width: 247px;
                height: 247px;
                left: 37px;
                top: 12px;
                overflow: visible;
            }
            #B01_-_Cm_sn_cp {
                left: 344px;
                top: 30px;
                position: absolute;
                overflow: visible;
                width: 198px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 27px;
                color: rgba(0,0,0,1);
            }
            #n_65_cq {
                left: 344px;
                top: 182px;
                position: absolute;
                overflow: visible;
                width: 95px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 38px;
                color: rgba(137,5,5,1);
            }
            #Thnh_phn_Cm_trng_sn_ch_trng_nc_cr {
                left: 344px;
                top: 78px;
                position: absolute;
                overflow: visible;
                width: 462px;
                height: 28px;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 12px;
                color: rgba(0,0,0,1);
            }
            #Rectangle_96_cs {
                fill: transparent;
                stroke: rgba(31,70,2,1);
                stroke-width: 2px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Rectangle_96_cs {
                position: absolute;
                overflow: visible;
                width: 225px;
                height: 71px;
                left: 581px;
                top: 170px;
            }
            #n_Thm_mn_c {
                left: 603px;
                top: 189px;
                position: absolute;
                overflow: visible;
                width: 174px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 31px;
                color: rgba(31,70,2,1);
            }
            #Rectangle_99_cu {
                fill: rgba(252,243,231,1);
            }
            .Rectangle_99_cu {
                filter: drop-shadow(0px 3px 6px rgba(52, 60, 2, 0.251));
                position: absolute;
                overflow: visible;
                width: 856px;
                height: 277px;
                left: 0px;
                top: 0px;
            }
            #comcom_cv {
                filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
                position: absolute;
                width: 247px;
                height: 247px;
                left: 37px;
                top: 12px;
                overflow: visible;
            }
            #B01_-_Cm_sn_cw {
                left: 344px;
                top: 27px;
                position: absolute;
                overflow: visible;
                width: 220px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 30px;
                color: rgba(0,0,0,1);
            }
            #n_65_235_cx {
                left: 344px;
                top: 182px;
                position: absolute;
                overflow: visible;
                width: 172px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: lighter;
                font-size: 29px;
                color: rgba(111,111,111,1);
            }
            #Thnh_phn_Cm_trng_sn_ch_trng_nc_cy {
                left: 344px;
                top: 78px;
                position: absolute;
                overflow: visible;
                width: 462px;
                height: 42px;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 18px;
                color: rgba(0,0,0,1);
            }
            #Rectangle_100_cz {
                fill: transparent;
                stroke: rgba(31,70,2,1);
                stroke-width: 2px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Rectangle_100_cz {
                position: absolute;
                overflow: visible;
                width: 225px;
                height: 71px;
                left: 581px;
                top: 170px;
            }
            #n_Thm_mn_c {
                left: 603px;
                top: 189px;
                position: absolute;
                overflow: visible;
                width: 174px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 31px;
                color: rgba(31,70,2,1);
            }
            #Line_1_c {
                fill: transparent;
                stroke: rgba(112,112,112,1);
                stroke-width: 1px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Line_1_c {
                overflow: visible;
                position: absolute;
                width: 74.897px;
                height: 1px;
                left: 343.09px;
                top: 211.933px;
                transform: matrix(1,0,0,1,0,0);
            }
            #Gim_20_c {
                left: 22px;
                top: 20px;
                position: absolute;
                overflow: visible;
                width: 104px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 23px;
                color: rgba(175,0,0,1);
            }
            #Group_193 {
                position: absolute;
                width: 838px;
                height: 259px;
                left: 1005px;
                top: 1368px;
                overflow: visible;
            }
            #Rectangle_95_c {
                fill: rgba(252,243,231,1);
            }
            .Rectangle_95_c {
                filter: drop-shadow(0px 3px 6px rgba(52, 60, 2, 0.251));
                position: absolute;
                overflow: visible;
                width: 856px;
                height: 277px;
                left: 0px;
                top: 0px;
            }
            #comcom_dc {
                filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
                position: absolute;
                width: 247px;
                height: 247px;
                left: 37px;
                top: 12px;
                overflow: visible;
            }
            #B01_-_Cm_sn_c {
                left: 344px;
                top: 30px;
                position: absolute;
                overflow: visible;
                width: 198px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 27px;
                color: rgba(0,0,0,1);
            }
            #n_65_c {
                left: 344px;
                top: 182px;
                position: absolute;
                overflow: visible;
                width: 95px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 38px;
                color: rgba(137,5,5,1);
            }
            #Thnh_phn_Cm_trng_sn_ch_trng_nc_c {
                left: 344px;
                top: 78px;
                position: absolute;
                overflow: visible;
                width: 462px;
                height: 28px;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 12px;
                color: rgba(0,0,0,1);
            }
            #Rectangle_96_c {
                fill: transparent;
                stroke: rgba(31,70,2,1);
                stroke-width: 2px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Rectangle_96_c {
                position: absolute;
                overflow: visible;
                width: 225px;
                height: 71px;
                left: 581px;
                top: 170px;
            }
            #n_Thm_mn_dh {
                left: 603px;
                top: 189px;
                position: absolute;
                overflow: visible;
                width: 174px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 31px;
                color: rgba(31,70,2,1);
            }
            #Rectangle_99_db {
                fill: rgba(252,243,231,1);
            }
            .Rectangle_99_db {
                filter: drop-shadow(0px 3px 6px rgba(52, 60, 2, 0.251));
                position: absolute;
                overflow: visible;
                width: 856px;
                height: 277px;
                left: 0px;
                top: 0px;
            }
            #comcom_dc {
                filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
                position: absolute;
                width: 247px;
                height: 247px;
                left: 37px;
                top: 12px;
                overflow: visible;
            }
            #B01_-_Cm_sn_dd {
                left: 344px;
                top: 27px;
                position: absolute;
                overflow: visible;
                width: 220px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 30px;
                color: rgba(0,0,0,1);
            }
            #n_65_235_de {
                left: 344px;
                top: 182px;
                position: absolute;
                overflow: visible;
                width: 172px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: lighter;
                font-size: 29px;
                color: rgba(111,111,111,1);
            }
            #Thnh_phn_Cm_trng_sn_ch_trng_nc_df {
                left: 344px;
                top: 78px;
                position: absolute;
                overflow: visible;
                width: 462px;
                height: 42px;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 18px;
                color: rgba(0,0,0,1);
            }
            #Rectangle_100_dg {
                fill: transparent;
                stroke: rgba(31,70,2,1);
                stroke-width: 2px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Rectangle_100_dg {
                position: absolute;
                overflow: visible;
                width: 225px;
                height: 71px;
                left: 581px;
                top: 170px;
            }
            #n_Thm_mn_dh {
                left: 603px;
                top: 189px;
                position: absolute;
                overflow: visible;
                width: 174px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 31px;
                color: rgba(31,70,2,1);
            }
            #Line_1_di {
                fill: transparent;
                stroke: rgba(112,112,112,1);
                stroke-width: 1px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Line_1_di {
                overflow: visible;
                position: absolute;
                width: 74.897px;
                height: 1px;
                left: 343.091px;
                top: 211.933px;
                transform: matrix(1,0,0,1,0,0);
            }
            #Gim_20_dj {
                left: 22px;
                top: 20px;
                position: absolute;
                overflow: visible;
                width: 104px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 23px;
                color: rgba(175,0,0,1);
            }
            #Khuyn_mi {
                left: 89px;
                top: 1696px;
                position: absolute;
                overflow: visible;
                width: 178px;
                white-space: nowrap;
                line-height: 209px;
                margin-top: -79.5px;
                text-align: left;
                font-family: SFU Function;
                font-style: normal;
                font-weight: normal;
                font-size: 50px;
                color: rgba(137,5,5,1);
            }
            #Image_14 {
                position: absolute;
                width: 832px;
                height: 405px;
                left: 83px;
                top: 1786px;
                overflow: visible;
            }
            #Image_14_dm {
                position: absolute;
                width: 832px;
                height: 405px;
                left: 1005px;
                top: 1786px;
                overflow: visible;
            }
            #Tin_tc__Bi_vit {
                left: 82px;
                top: 2240px;
                position: absolute;
                overflow: visible;
                width: 237px;
                white-space: nowrap;
                line-height: 61px;
                margin-top: -5.5px;
                text-align: left;
                font-family: SFU Function;
                font-style: normal;
                font-weight: normal;
                font-size: 50px;
                color: rgba(137,5,5,1);
            }
            #Group_149 {
                position: absolute;
                width: 853px;
                height: 231px;
                left: 83px;
                top: 2318px;
                overflow: visible;
            }
            #Rectangle_114 {
                fill: rgba(252,243,231,1);
            }
            .Rectangle_114 {
                filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
                position: absolute;
                overflow: visible;
                width: 871px;
                height: 249px;
                left: 0px;
                top: 0px;
            }
            #Tin_chn_ng_t_Phi {
                left: 21px;
                top: 26px;
                position: absolute;
                overflow: visible;
                width: 299px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 30px;
                color: rgba(0,0,0,1);
            }
            #Mt_on_qun_vui_nhn_ang_ho_hc_n_ {
                left: 21px;
                top: 69px;
                position: absolute;
                overflow: visible;
                width: 474px;
                height: 48px;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 20px;
                color: rgba(0,0,0,1);
            }
            #n_332023 {
                left: 21px;
                top: 195px;
                position: absolute;
                overflow: visible;
                width: 90px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 19px;
                color: rgba(0,0,0,1);
            }
            #Image_15 {
                position: absolute;
                width: 317px;
                height: 212px;
                left: 529px;
                top: 11px;
                overflow: visible;
            }
            #Group_150 {
                position: absolute;
                width: 853px;
                height: 230px;
                left: 998px;
                top: 2319px;
                overflow: visible;
            }
            #Rectangle_114_dv {
                fill: rgba(252,243,231,1);
            }
            .Rectangle_114_dv {
                filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
                position: absolute;
                overflow: visible;
                width: 871px;
                height: 248px;
                left: 0px;
                top: 0px;
            }
            #Tin_chn_ng_t_Phi_dw {
                left: 21px;
                top: 25px;
                position: absolute;
                overflow: visible;
                width: 299px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 30px;
                color: rgba(0,0,0,1);
            }
            #Mt_on_qun_vui_nhn_ang_ho_hc_n__dx {
                left: 21px;
                top: 69px;
                position: absolute;
                overflow: visible;
                width: 474px;
                height: 48px;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 20px;
                color: rgba(0,0,0,1);
            }
            #n_332023_dy {
                left: 21px;
                top: 195px;
                position: absolute;
                overflow: visible;
                width: 90px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 19px;
                color: rgba(0,0,0,1);
            }
            #Image_15_dz {
                position: absolute;
                width: 318px;
                height: 212px;
                left: 529px;
                top: 10px;
                overflow: visible;
            }
            #Group_159 {
                position: absolute;
                width: 1920px;
                height: 444px;
                left: 0px;
                top: 2587px;
                overflow: visible;
            }
            #Rectangle_116 {
                fill: rgba(137,5,5,1);
            }
            .Rectangle_116 {
                position: absolute;
                overflow: visible;
                width: 1920px;
                height: 444px;
                left: 0px;
                top: 0px;
            }
            #i_nt {
                left: 905px;
                top: 21px;
                position: absolute;
                overflow: visible;
                width: 101px;
                white-space: nowrap;
                line-height: 127px;
                margin-top: -38.5px;
                text-align: left;
                font-family: SFU Function;
                font-style: normal;
                font-weight: normal;
                font-size: 50px;
                color: rgba(252,243,231,1);
            }
            #n_Cho_mng_bn_n_vi_VFOODPH_NI_C {
                left: 23px;
                top: 86px;
                position: absolute;
                overflow: visible;
                width: 1875px;
                height: 254px;
                text-align: center;
                font-family: Helvetica Neue;
                font-style: normal;
                font-weight: normal;
                font-size: 30px;
                color: rgba(252,243,231,1);
            }
            #Group_196 {
                position: absolute;
                width: 1136px;
                height: 124px;
                left: 392px;
                top: 247px;
                overflow: visible;
            }
            #Group_194 {
                position: absolute;
                width: 388px;
                height: 124px;
                left: 0px;
                top: 0px;
                overflow: visible;
            }
            #Thanh_ton {
                left: 118px;
                top: 0px;
                position: absolute;
                overflow: visible;
                width: 158px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 31px;
                color: rgba(252,243,231,1);
            }
            #COD_BANK_PHI_BANK_VIT_GCASH {
                left: 0px;
                top: 50px;
                position: absolute;
                overflow: visible;
                width: 389px;
                white-space: nowrap;
                text-align: center;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 31px;
                color: rgba(252,243,231,1);
            }
            #Group_195 {
                position: absolute;
                width: 340px;
                height: 112px;
                left: 796px;
                top: 6px;
                overflow: visible;
            }
            #Knh_lin_h {
                left: 92px;
                top: 0px;
                position: absolute;
                overflow: visible;
                width: 172px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 31px;
                color: rgba(252,243,231,1);
            }
            #Facebook_VNFOODPH_Telegram_VNF {
                left: 0px;
                top: 38px;
                position: absolute;
                overflow: visible;
                width: 341px;
                white-space: nowrap;
                text-align: center;
                font-family: Roboto;
                font-style: normal;
                font-weight: bold;
                font-size: 31px;
                color: rgba(252,243,231,1);
            }
            #c_to_bi_VNFOODPH {
                left: 825px;
                top: 390px;
                position: absolute;
                overflow: visible;
                width: 219px;
                white-space: nowrap;
                text-align: left;
                font-family: Roboto;
                font-style: normal;
                font-weight: normal;
                font-size: 19px;
                color: rgba(252,243,231,1);
            }
            #Line_14 {
                fill: transparent;
                stroke: rgba(252,243,231,1);
                stroke-width: 1px;
                stroke-linejoin: miter;
                stroke-linecap: butt;
                stroke-miterlimit: 4;
                shape-rendering: auto;
            }
            .Line_14 {
                overflow: visible;
                position: absolute;
                width: 1844.567px;
                height: 1px;
                left: 38.264px;
                top: 222.248px;
                transform: matrix(1,0,0,1,0,0);
            }
        </style>

        @php
            Theme::asset()->remove('language-css');
            Theme::asset()->container('footer')->remove('language-public-js');
            Theme::asset()->container('footer')->remove('simple-slider-owl-carousel-css');
            Theme::asset()->container('footer')->remove('simple-slider-owl-carousel-js');
            Theme::asset()->container('footer')->remove('simple-slider-css');
            Theme::asset()->container('footer')->remove('simple-slider-js');
        @endphp

        {!! Theme::header() !!}
    </head>
    <body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif @if (Theme::get('bodyClass')) class="{{ Theme::get('bodyClass') }}" @endif>
{{--        @if (theme_option('preloader_enabled', 'yes') == 'yes')--}}
{{--            {!! Theme::partial('preloader') !!}--}}
{{--        @endif--}}

        {!! Theme::partial('svg-icons') !!}
        {!! apply_filters(THEME_FRONT_BODY, null) !!}
    <div class="header">
        <div id="Group_145">
            <div id="Group_12">
                <svg class="Rectangle_73">
                    <rect id="Rectangle_73" rx="0" ry="0" x="0" y="0" width="32" height="6">
                    </rect>
                </svg>
                <svg class="Rectangle_74">
                    <rect id="Rectangle_74" rx="0" ry="0" x="0" y="0" width="32" height="4">
                    </rect>
                </svg>
                <svg class="Rectangle_75">
                    <rect id="Rectangle_75" rx="0" ry="0" x="0" y="0" width="32" height="6">
                    </rect>
                </svg>
            </div>
        </div>
        <div id="Group_147">
            <div id="Group_144">
                <div id="Group_143">
                    <img id="Group_142" src="{{ Theme::asset()->url('images/Group_142.png') }}">


                </div>
            </div>
            <div id="Group_146">
                <div id="Group_125">
                    <img id="Mask_Group_7" src="{{ Theme::asset()->url('images/Mask_Group_7.png') }}">


                    <svg class="Polygon_6" viewBox="0 0 12.091 8.061">
                        <path id="Polygon_6" d="M 6.04545783996582 0 L 12.09091663360596 8.060610771179199 L 0 8.060610771179199 Z">
                        </path>
                    </svg>
                </div>
                <svg class="Ellipse_3">
                    <ellipse id="Ellipse_3" rx="13.703038215637207" ry="12.982198715209961" cx="13.703038215637207" cy="12.982198715209961">
                    </ellipse>
                </svg>
            </div>
        </div>
        <img id="Mask_Group_8" src="{{ Theme::asset()->url('images/Mask_Group_8.png') }}">
        <div id="VNFOODPH_MN_N_VIT_NAM_TI_PHILL">
            <span>VNFOOD.PH MÓN ĂN VIỆT NAM<br>TẠI PHILLIPINES</span>
        </div>
        <div id="Group_148">
            <svg class="Ellipse_4">
                <ellipse id="Ellipse_4" rx="54" ry="54.5" cx="54" cy="54.5">
                </ellipse>
            </svg>
            <img id="LOGO-LOGO" src="{{ Theme::asset()->url('images/LOGO-LOGO.png') }}">

        </div>

        <div id="Group_151">
            <svg class="Rectangle_115">
                <rect id="Rectangle_115" rx="10" ry="10" x="0" y="0" width="465" height="80">
                </rect>
            </svg>
            <div id="Hot_ng_10h00_-_23h00">
                <span>Hoạt động 10h00 - 23h00</span>
            </div>
        </div>
    </div>

