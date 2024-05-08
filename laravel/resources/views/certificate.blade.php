<!doctype html>
<html class="no-js" lang="az">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Digiuth</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/logo/favicon.svg">
    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/font-flaticon/flaticon.css">
    <link rel="stylesheet" href="/assets/css/default.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
</head>

<style>

    #scrollUp {
        background: #9CCA46;
        box-shadow: 0px 4px 15px #686c60;
        height: 45px;
        width: 45px;
        right: 50px;
        bottom: 60px;
        color: #fff;
        font-size: 20px;
        text-align: center;
        border-radius: 50%;
        font-size: 22px;
        line-height: 45px;
        transition: .5s;
    }

    #scrollUp:hover {
        background: #9CCA46;
    }

    /* Certificate item area start*/

    @font-face {
        font-family: "Montserrat";
        src: url("/assets/fonts/Montserrat-Regular.ttf");
        font-weight: 400;
    }

    @font-face {
        font-family: "Montserrat";
        src: url("/assets/fonts/Montserrat-Bold.ttf");
        font-weight: 700;
    }

    @font-face {
        font-family: "Lato";
        src: url("/assets/fonts/Lato-Regular.ttf");
        font-weight: 400;
    }

    @font-face {
        font-family: "Open-sans";
        src: url("/assets/fonts/OpenSans-Regular.ttf");
        font-weight: 400;
    }

    .certificate_container {
        overflow-x: auto;
    }

    .certificate_item_area {
        width: 100%;
        margin: 0 auto;
    }

    .certificate_item_area .certificate_download {
        display: flex;
        align-items: center;
        position: fixed;
        width: 100%;
        top: 0;
        background-color: white;
        z-index: 500;
        padding: 17px;
        justify-content: center;
    }

    .certificate_item_area .certificate_download button {
        padding: 8px 15px;
        border: none;
        font-size: 15px;
        border-radius: 6px;
        margin: 0 5px;
    }

    .certificate_item_area .certificate_download * {
        font-family: "Montserrat", sans-serif;
    }

    .certificate_item_area .certificate_download .text {
        font-weight: 700;
        color: #739E69;
        margin-right: 8px;
        font-size: 17px;
    }

    .certificate_item_area .item {
        position: relative;
        margin: 15px auto;
        width: 1050px;
        height: 675px;
        padding: 65px 140px;
        border: 1px solid #DCEBE6;
    }

    .certificate_item_area .left_side {
        max-width: 200px;
        position: absolute;
        left: -15px;
        top: -15px;
    }

    .certificate_item_area .left_side img {
        width: 100%;
        object-fit: contain;
    }

    .certificate_item_area .right_side {
        max-width: 200px;
        position: absolute;
        right: -15px;
        bottom: -15px;
    }

    .certificate_item_area .right_side img {
        width: 100%;
        object-fit: contain;
    }

    .certificate_item_area .card_header .certificate_supported {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 50px;
        margin-bottom: 50px;
        padding: 0 120px;
    }

    .certificate_item_area .card_header .certificate_supported div {
        display: flex;
        align-items: center;
    }

    .certificate_item_area .card_header .certificate_supported img {
        max-width: 100%;
    }

    .certificate_item_area .card_header .card_title {
        font-size: 30px;
        margin-bottom: 17px;
        line-height: 27px;
        text-align: center;
        color: #01767F;
        font-family: "Montserrat", sans-serif;
        font-weight: 700;
    }

    .certificate_item_area .card_header p {
        margin-bottom: 1px;
        font-size: 15px;
        line-height: 15px;
        text-align: center;
        color: #01767F;
        font-family: "Montserrat", sans-serif;
        font-weight: 400;
    }

    .certificate_item_area .card_body .name {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .certificate_item_area .card_body .name img {
        width: 13px;
    }

    .certificate_item_area .card_body .name img:nth-child(3) {
        transform: rotate(180deg);
    }

    .certificate_item_area .card_body .name span {
        border-bottom: 2px solid #DEDEDE;
        padding: 20px 25px;
        margin: 0 6px;
        color: #272446;
        font-size: 36px;
        font-weight: 700;
        font-family: "Montserrat", sans-serif;
    }

    .certificate_item_area .card_body p.course_description {
        color: #B7B7B7;
        font-size: 14px;
        line-height: 20px;
        font-family: "Lato", sans-serif;
        margin-top: 27px;
        text-align: center;
        font-style: italic;
    }

    .certificate_item_area .card_footer {
        display: grid;
        margin-top: 50px;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 15px;
    }

    .certificate_item_area .card_footer .signature {
        text-align: center;
        margin-left: -40px;
    }

    .certificate_item_area .card_footer .signature img {
        width: 183px;
        margin-bottom: -45px;
    }

    .certificate_item_area .certificated_time {
        margin-top: 58px;
        margin-right: -40px;
    }

    .certificate_item_area .card_footer .label {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .certificate_item_area .card_footer .label img {
        width: 86px;
    }

    .certificate_item_area .card_footer .time {
        color: #B7B7B7;
        font-family: "Open-sans", sans-serif;
        font-weight: 400;
        margin-bottom: 0;
        font-size: 14px;
        text-align: center;
    }

    .certificate_item_area .card_footer .text {
        color: #272446;
        font-family: "Montserrat", sans-serif;
        font-weight: 700;
        font-size: 13px;
        text-align: center;
        border-top: 1px solid #858390;
        padding-top: 2px;
    }


    #previewImg {
        opacity: 0;
        display: 'absolute';
    }


    /* Certificate item area end*/
</style>

<body>

<section id="certificate_item" class="certificate_item_area fix pt-120 pb-120">
    <div class="certificate_download">
        <span class="text">{{ __('third.upload') }}:</span>
        <button id="btn_convert1" type="button">JPEG</button>
        <span>{{ __('third.or') }}</span>
        <button id="btn_convert2">PDF</button>
        <a class="btn btn-secondary btn-xs" href="{{route('home')}}">{{__('header.back')}}</a>

    </div>
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="certificate_container">
                    <div class="item">
                        <div class="left_side"><img src="/assets/img/certificate/left-side.png" alt=""></div>
                        <div class="right_side"><img src="/assets/img/certificate/right-side.png" alt=""></div>
                        <div class="card_header">
                            <div class="certificate_supported">
                                <div><img src="/assets/img/certificate/esn.svg" alt=""></div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 682.77 134.08">
                                        <defs>
                                            <style>.cls-1 {
                                                    fill: #0d5381;
                                                }

                                                .cls-2 {
                                                    fill: #9ac448;
                                                }</style>
                                        </defs>
                                        <g id="Layer_2" data-name="Layer 2">
                                            <g id="Layer_1-2" data-name="Layer 1">
                                                <path class="cls-1"
                                                      d="M406.88,101.12a2.55,2.55,0,0,0-.5.29,26.39,26.39,0,0,1-15,6.53A45.88,45.88,0,0,1,370,105.85a29.86,29.86,0,0,1-16.64-13.77A29.23,29.23,0,0,1,350,77.39c.08-14.62,9.83-24.23,21.1-27.85a43.89,43.89,0,0,1,26.45-.33,22.69,22.69,0,0,1,8.12,4.47l1.05.85.29-.08V49.3h19c0,.48.07.93.07,1.38q0,24.23,0,48.44a85.92,85.92,0,0,1-.74,12.82,19.66,19.66,0,0,1-7.6,12.79,35.12,35.12,0,0,1-15.53,6.85,77.86,77.86,0,0,1-22.24.84,44.47,44.47,0,0,1-12.74-2.87,20.08,20.08,0,0,1-8.19-5.71c-2.9-3.53-3.89-7.63-3.7-12.22h18.86a2.07,2.07,0,0,1,.2.56c.29,2.94,2.07,4.65,4.67,5.72a22.56,22.56,0,0,0,8,1.38,38.93,38.93,0,0,0,11-1c5.08-1.3,8.07-3.83,8.79-10.69.19-1.84.12-3.7.15-5.55A6.51,6.51,0,0,0,406.88,101.12Zm.06-23.05c.21-8-4.4-13.4-10.41-15.46a23.38,23.38,0,0,0-15.95.15,14.57,14.57,0,0,0-9.28,9.62,18.85,18.85,0,0,0-.68,7.84c.75,6.49,4.23,10.84,10.27,13.11A23.67,23.67,0,0,0,392,94.42C400.27,93.54,407.13,87.65,406.94,78.07Z"/>
                                                <path class="cls-1"
                                                      d="M281.57,28.29h19v82.57H281.63v-5.39a5.29,5.29,0,0,0-.83.47,25.63,25.63,0,0,1-14.42,6.67,43.12,43.12,0,0,1-19.23-1.21c-11.78-3.78-19.62-11.46-22-23.81C223.34,78,224.7,68.9,230.91,61a31.28,31.28,0,0,1,18-11.28,43.26,43.26,0,0,1,21.09,0,23.38,23.38,0,0,1,10.59,5.87,4.69,4.69,0,0,0,.47.42,3.09,3.09,0,0,0,.47.19ZM245.1,80.81c0,.76,0,1.51,0,2.27a15,15,0,0,0,.22,1.62,15.64,15.64,0,0,0,9.84,12.45,21.25,21.25,0,0,0,11.51,1.25c6.33-.94,11-4.15,13.53-10.15A19.6,19.6,0,0,0,281.36,78a15.93,15.93,0,0,0-8.74-12.75,21,21,0,0,0-12.15-1.88,17.16,17.16,0,0,0-9.76,4C246.61,70.89,245.06,75.53,245.1,80.81Z"/>
                                                <path class="cls-1"
                                                      d="M682.76,111H663.68v-1.52c0-10.39.05-20.77-.07-31.16a35.17,35.17,0,0,0-1-7.33,9.35,9.35,0,0,0-8-7.61A21.76,21.76,0,0,0,642,64.42c-5.58,2.32-8.6,6.66-9.51,12.53a28.89,28.89,0,0,0-.25,4.27q0,14.06,0,28.12v1.6h-19V28.36h19v29.8l.25.1,1.67-1.61c6.8-6.5,14.95-9.27,24.29-8.82A31.94,31.94,0,0,1,671.78,51a18.66,18.66,0,0,1,10.44,15.36,99,99,0,0,1,.51,10.19c.06,10.93,0,21.86,0,32.79Z"/>
                                                <path class="cls-1"
                                                      d="M549,110.88H530v-8.8l-.25-.11-1.57,1.53a31.5,31.5,0,0,1-24.47,9c-5.25-.27-10.26-1.28-14.78-4.08A18.48,18.48,0,0,1,480,94a97.36,97.36,0,0,1-.51-9.81c-.06-11.1,0-22.2,0-33.3V49.29h19.08v1.48c0,10.39-.07,20.77.07,31.16a35.77,35.77,0,0,0,1.21,7.8c.94,3.89,3.59,6.17,7.49,7a22,22,0,0,0,13-1c5.44-2.22,8.48-6.41,9.42-12.15A24,24,0,0,0,530,79.7q0-14.37,0-28.76V49.33h19Z"/>
                                                <path class="cls-1"
                                                      d="M569.62,33.05H588.7V49.17h14.36V63.69H588.82c0,.4-.08.64-.08.88,0,9.29,0,18.58,0,27.87a27.54,27.54,0,0,0,.42,3.36,2.6,2.6,0,0,0,2.44,2.33,20.9,20.9,0,0,0,3.26.29c2.69,0,5.38,0,8.16,0v14.69c-.45,0-.86.06-1.27.06-4.55,0-9.1,0-13.64,0a31.46,31.46,0,0,1-10.53-1.72,11.24,11.24,0,0,1-7.7-9.84,29.66,29.66,0,0,1-.24-3.76q0-16.15,0-32.29V63.81h-9V49.25h8.93Z"/>
                                                <path class="cls-1" d="M318,49.29h18.71v61.58H318Z"/>
                                                <path class="cls-1" d="M462.35,49.32v61.52H443.58V49.32Z"/>
                                                <path class="cls-1" d="M318.08,28.31h18.66V42.78H318.08Z"/>
                                                <path class="cls-1" d="M462.29,42.84H443.57V28.32h18.72Z"/>
                                                <path class="cls-2"
                                                      d="M0,48.5c1.64,2.13,3.18,4.35,5,6.36,2.28,2.58,4.76,5,7.15,7.45.12.12.21.25.43.51-.74.29-1.37.58-2,.8A25.43,25.43,0,0,0,2.42,68.2a9.06,9.06,0,0,0-1.18,1.14A2.29,2.29,0,0,0,1.63,73a4.23,4.23,0,0,0,1.1.61,25.64,25.64,0,0,0,10,2,22.68,22.68,0,0,0,10.26-3.21,3.74,3.74,0,0,0,.42-.27,7.16,7.16,0,0,1,6.41-1.18,35.39,35.39,0,0,0,12.06.37c3.47-.36,6.92-.88,10.39-1.23a23.45,23.45,0,0,1,8.49.85A30.18,30.18,0,0,1,77,82a74.85,74.85,0,0,1,10.68,19.66,87.9,87.9,0,0,1,5,20.52c.34,2.7.41,5.44.6,8.16.08,1.17.15,2.33.22,3.45a47.12,47.12,0,0,1-9.76.11c0-.37-.09-.78-.09-1.18a65.82,65.82,0,0,0-3.84-22.37A39.88,39.88,0,0,0,71,95.58a35.29,35.29,0,0,0-17.82-10,43.71,43.71,0,0,0-21,.32c-2.77.7-5.52,1.51-8.23,2.43a9,9,0,0,0-3.12,1.81c-1.52,1.39-1.44,3.24-.82,5a3.9,3.9,0,0,0,3.76,2.7,9.73,9.73,0,0,0,3-.35c1.78-.48,3.52-1.12,5.3-1.65a8.41,8.41,0,0,1,2.08-.45,1.47,1.47,0,0,1,1.46,2.21,9.11,9.11,0,0,1-.84,1.4,19.38,19.38,0,0,0-3.37,8.74,4.26,4.26,0,0,0,0,1,1.87,1.87,0,0,0,2.28,1.92,20.7,20.7,0,0,0,10.88-4.63,24.75,24.75,0,0,0,5.69-7.33,17.6,17.6,0,0,1,1.24-2,2.76,2.76,0,0,1,3.56-1,22.17,22.17,0,0,1,5.7,3.46c6.48,5.11,10.06,11.95,11.76,19.88A67.22,67.22,0,0,1,74,132.55v1.39c-.54,0-1,.11-1.43.11-17,0-34,.1-51,0A21.71,21.71,0,0,1,.46,116.07c-.15-.9-.31-1.81-.46-2.71Z"/>
                                                <path class="cls-2"
                                                      d="M150.53,46.08c1.35-.55,2.54-1.08,3.76-1.53a46.52,46.52,0,0,1,13.39-2.88,19.6,19.6,0,0,1,3.25,0,3.55,3.55,0,0,1,2.82,2.1,14.23,14.23,0,0,1,.66,1.5,19,19,0,0,0,14,12.6c.77.2,1.57.33,2.34.51.32.07.63.19,1,.31,0,.47.07.88.07,1.29,0,17.54,0,35.08,0,52.62a20.6,20.6,0,0,1-4.9,13.35,21.43,21.43,0,0,1-17.21,8.1q-23.76,0-47.51,0h-1.59a23.63,23.63,0,0,1,0-2.53A49.1,49.1,0,0,1,124,117.88a43,43,0,0,1,7.71-12.06,24,24,0,0,1,2.31-2.31,1.94,1.94,0,0,1,2.84.12,19.49,19.49,0,0,1,1.71,2,17.1,17.1,0,0,0,11.6,6.46,59.9,59.9,0,0,0,6.28.48,3.14,3.14,0,0,0,3.3-2.73,4.14,4.14,0,0,0-.27-2,6.9,6.9,0,0,0-1.17-1.79,22.36,22.36,0,0,0-9.74-7.35c-1.66-.59-3.27-1.31-5.09-2,.44-.3.7-.49,1-.64a15,15,0,0,1,10.64-1.52,16.88,16.88,0,0,1,7.75,4.3,29.19,29.19,0,0,1,5.54,7.47,41.28,41.28,0,0,0,2.3,3.91c1.44,2,3.11,2.4,5.53,1.37a4.07,4.07,0,0,0,2.61-4.88,10.67,10.67,0,0,0-.74-2.41,35.68,35.68,0,0,0-8.63-12.3c-.41-.37-.81-.75-1.18-1.14-1.18-1.26-1.08-2.29.34-3.22,1-.67,2.11-1.23,3.12-1.91a21.85,21.85,0,0,0,6.13-6.78,12.28,12.28,0,0,0,.72-1.62,2.29,2.29,0,0,0-2.13-2,21.22,21.22,0,0,0-12.53.89,18.83,18.83,0,0,0-6.6,4.55c-.75.79-1.5,1.59-2.29,2.35a4.61,4.61,0,0,1-3.18,1.32,29,29,0,0,0-13.93,4,11.62,11.62,0,0,1-1.69.85,1.33,1.33,0,0,1-2-1.16,4.36,4.36,0,0,1,0-1.25A21.31,21.31,0,0,0,133,77c-.58-1.73-1.78-2.15-3.27-1.13-4.17,2.87-7.45,6.46-8.5,11.6a12.21,12.21,0,0,0-.14,4,27.93,27.93,0,0,1-2.63,16.19c-1.53,3.18-3.08,6.35-4.44,9.61a44.7,44.7,0,0,0-2.87,11.46c-.22,1.7-.4,3.41-.61,5.21h-7.33a3.64,3.64,0,0,1-.16-.63c-.08-1.93-.13-3.86-.23-5.79a89,89,0,0,0-3.26-20c-.79-2.74-1.8-5.42-2.68-8.14a12.18,12.18,0,0,1-.54-2.2,3.15,3.15,0,0,1,.94-2.89,18.11,18.11,0,0,1,3-2.1,54.9,54.9,0,0,0,14.26-11.13,66,66,0,0,0,7.59-10.52,53.72,53.72,0,0,1,7.5-9.8c2.29-2.34,4.7-4.57,7.08-6.81a8.48,8.48,0,0,1,1.86-1.29,2.54,2.54,0,0,1,3.23.52,14,14,0,0,1,1.25,1.42,18.24,18.24,0,0,0,15.36,7.79,27,27,0,0,0,4.4-.3c1.63-.26,2-1.07,1.42-2.63a20.79,20.79,0,0,0-6-8.16,16.21,16.21,0,0,0-4.82-2.94A4.69,4.69,0,0,1,150.53,46.08Z"/>
                                                <path class="cls-2"
                                                      d="M116,41c-1.44-1.43-2.71-2.71-4-4a17.74,17.74,0,0,0-7.55-4.65l-.6-.17c-2.4-.59-3.35.14-3.29,2.6a20.05,20.05,0,0,0,5.82,14.23,21.48,21.48,0,0,0,6.38,4.24l.46.2c2.52,1.15,3.28,2.66,2.64,5.39a33.89,33.89,0,0,1-6.53,13.52,45.81,45.81,0,0,1-12.91,11c-.91.53-1.81,1.07-2.73,1.58a2.28,2.28,0,0,1-3.4-.75c-.39-.55-.72-1.14-1.09-1.7-1.32-2.05-2.6-4.13-4-6.14s-1.33-3.17.56-4.91a39.11,39.11,0,0,0,3.68-3.6,17.45,17.45,0,0,0,3.79-9.6c.15-1.42.19-2.85.21-4.27a7.42,7.42,0,0,0-.29-2,1.75,1.75,0,0,0-2.44-1.29A16.94,16.94,0,0,0,85.2,53.9,19.18,19.18,0,0,0,79,62.18a2,2,0,0,1-3.68.65,14.91,14.91,0,0,1-1.71-2.64A64,64,0,0,1,68.41,48,15.86,15.86,0,0,1,68,45.19a1.44,1.44,0,0,1,1-1.59A14.66,14.66,0,0,1,71.12,43a20,20,0,0,0,10.95-5.86A21.11,21.11,0,0,0,86.63,29c.7-2.23-.34-3.21-2.4-3.14-4.78.18-9.35,1.24-13.18,4.35-1,.79-1.81,1.76-2.74,2.62-.41.38-.89.7-1.22,1-1-.14-1.4-.66-1.39-1.43,0-2.47.07-4.95.19-7.43s.41-4.68.55-7c.21-3.53,1.49-5,5-5.75a20.81,20.81,0,0,0,6.7-2.51A18,18,0,0,0,85.08,2c.31-.64.64-1.27,1-1.93h29.32c.12.78.26,1.51.35,2.25a14.17,14.17,0,0,0,3.71,8.11,11.34,11.34,0,0,1,3.18,5.49,6.14,6.14,0,0,1-.58,4.29c-2.87,5.21-4,10.93-5,16.68-.2,1.12-.43,2.23-.65,3.34A5.6,5.6,0,0,1,116,41Z"/>
                                                <path class="cls-2"
                                                      d="M7.36,40.66A7,7,0,0,1,5,38c-.4-.74-.75-1.5-1.15-2.24A8.89,8.89,0,0,0,.29,32c0-.46-.07-.91-.07-1.36,0-3.12,0-6.23,0-9.34a20.56,20.56,0,0,1,5.52-14A21.56,21.56,0,0,1,19.27.12,23.64,23.64,0,0,1,22.42,0H59.06c.48,0,1,.06,1.6.1-.23.88-.4,1.61-.61,2.32a90.22,90.22,0,0,0-3.13,14.91c-.05.45,0,.92-.05,1.38a1.64,1.64,0,0,1-1.6,1.74,9.13,9.13,0,0,1-1.34-1,21.84,21.84,0,0,0-13.07-6.25c-2.53-.36-3.46.77-2.8,3.26a22.08,22.08,0,0,0,5.41,10.12,19.61,19.61,0,0,0,7.63,4.79c.95.34,1.93.59,2.89.91a3.05,3.05,0,0,1,2.37,3,68.17,68.17,0,0,0,5.31,22.08,10,10,0,0,1,.69,1.89c.22,1-.23,1.56-1.25,1.57s-1.75-.19-2.63-.23c-2.18-.11-4.37-.23-6.55-.24s-2.79-.44-3.25-2.64c-.27-1.27-.48-2.57-.84-3.81C46.08,48,42,44,36.55,41.41a6,6,0,0,0-.71-.25c-1.72-.48-2.54,0-2.92,1.75a16.55,16.55,0,0,0,0,6.76,20.29,20.29,0,0,0,3.94,8.77c.31.4.62.8.94,1.19a1.56,1.56,0,0,1,.23,1.66,1.38,1.38,0,0,1-1.44.82,24.4,24.4,0,0,1-6.86-.91,32.17,32.17,0,0,1-10.27-5.3c-1.92-1.43-2.23-3.31-1.27-5.75a33.91,33.91,0,0,0,1.72-5.25,19.84,19.84,0,0,0-1.53-11.83c-.48-1.16-1.09-2.27-1.67-3.38a6.76,6.76,0,0,0-.86-1.25,2.3,2.3,0,0,0-3.87,0A16.86,16.86,0,0,0,8.87,35c-.29,1.22-.56,2.46-.87,3.68C7.85,39.32,7.61,39.9,7.36,40.66Z"/>
                                                <path class="cls-2"
                                                      d="M134.36,20l-.74-.89a40.23,40.23,0,0,1,7-10.16c2.8-3,5.75-5.88,8.65-8.83.35,0,.68-.09,1-.09h20a20.66,20.66,0,0,1,13.1,4.59,20.49,20.49,0,0,1,8.24,14.76c.29,3.38.19,6.8.25,10.2,0,1.42,0,2.85,0,4.4-.44-.07-.76-.09-1.06-.16A57.8,57.8,0,0,0,180,32.07c-1.38-.08-2.77-.12-4.15-.28-1-.12-2.26,0-2.77-1.6a24,24,0,0,1,1.16-2.33,21.34,21.34,0,0,0,2.82-9.08,2.1,2.1,0,0,0-2.69-2.51,18.05,18.05,0,0,0-9.83,4.8c-1.71,1.67-3.26,3.51-4.81,5.34a43.74,43.74,0,0,1-14.21,11.12,81.4,81.4,0,0,0-12,6.88c-1.3.93-2.55,1.93-3.83,2.88a14.45,14.45,0,0,1-1.45,1,1.62,1.62,0,0,1-2-.12,12.56,12.56,0,0,1-.06-3.88c.11-2,.29-4,.45-6,0-.59.13-1.17.17-1.76.17-2.44,2-3.34,3.93-3.42a47.36,47.36,0,0,0,4.78-.27,18,18,0,0,0,9.79-4.61c1-.88,1.86-1.82,2.73-2.78a9.2,9.2,0,0,0,1.23-1.75c.65-1.19.46-2.06-.79-2.58A24.47,24.47,0,0,0,144,19.76c-2.76-.57-5.53-.1-8.29.14Z"/>
                                                <path class="cls-2"
                                                      d="M135.37.36c-1.62,1.56-2.69,3.66-4.85,4.83-1.86-1.25-1.71-3.35-2.77-5.09h7.41Z"/>
                                                <path class="cls-2"
                                                      d="M191.76,44.21v4.66l-.2.11-2.84-4.78C189.84,43.52,190.4,43.53,191.76,44.21Z"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                <div><img src="/assets/img/certificate/visegrad_logo.svg" alt=""></div>

                            </div>
                            <h4 class="card_title">{{ $certificate->course->title }}</h4>

                            <p>{{ __('third.certificate_presenting') }}</p>
                        </div>

                        <div class="card_body">
                            <div class="name">
                                <img src="/assets/img/certificate/name_sign.svg" alt=""><span>
                                    {{ ($certificate->user->name ?? '') . ' ' .($certificate->user->surname) }}</span><img
                                    src="/assets/img/certificate/name_sign.svg" alt=""></div>
                            @if(\Illuminate\Support\Facades\Lang::has('third.certificate_body'))
                                <p class="course_description">
                                    {{ __('third.certificate_body') }}
                                </p>
                            @else
                                <p class="course_description"></p>
                            @endif
                        </div>
                        <div class="card_footer">
                            <div class="certificated_time">
                                <p class="time">
                                    {{ $certificate->created_at->format('Y/m/d') }}
                                </p>
                                @if(\Illuminate\Support\Facades\Lang::has('third.date'))
                                    <p class="text">{{ __('third.date') }}</p>
                                @else

                                @endif
                            </div>
                            <div class="label">
                                <img src="/assets/img/certificate/label.svg" alt="">
                            </div>
                            <div class="signature">
                                <img src="/assets/img/certificate/AliTsignature.svg" alt="">
                                @if(\Illuminate\Support\Facades\Lang::has('third.signature'))
                                    <p class="text">{{ __('third.signature') }}</p>
                                @else
                                    <p class="text"></p>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="previewImg">

    </div>
</section>


</main>


<!-- footer-end -->
<!-- JS here -->
<script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/slick.min.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/jquery.scrollUp.min.js"></script>
<script src="/assets/js/jquery.meanmenu.min.js"></script>
<script src="/assets/js/main.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<script>
    let c;

    $("#btn_convert1").on("click", function () {
        html2canvas(document.getElementById("container")).then(function (canvas) {
            c = canvas;
            var anchorTag = document.createElement("a");
            $('body').append(anchorTag);
            $("#previewImg").append(canvas);
            anchorTag.download = "filename.jpg";
            anchorTag.href = canvas.toDataURL();
            anchorTag.target = '_blank';
            anchorTag.click();
        });
    });

    function addScript(url) {
        var script = document.createElement('script');
        script.type = 'application/javascript';
        script.src = url;
        document.head.appendChild(script);
    }

    addScript('https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js');


    $("#btn_convert2").on("click", function () {

        html2canvas(document.getElementById("container"), {
            useCORS: true,
            allowTaint: true,
            scrollY: -window.scrollY,
        }).then(function (canvas) {


            c = canvas;
            var anchorTag = document.createElement("a");
            $('body').append(anchorTag);
            $("#previewImg").append(canvas);
            anchorTag.href = canvas.toDataURL();
            anchorTag.target = '_blank';

            console.log(c)
            var imgData = c.toDataURL("image/jpeg", 1.0);
            var doc = new jsPDF('l', 'px', 'a4');
            console.log(doc.internal.pageSize)
            const pageWidth = doc.internal.pageSize.width
            const pageHeight = doc.internal.pageSize.height

            const widthRatio = pageWidth / canvas.width;
            const heightRatio = pageHeight / canvas.height;
            const ratio = widthRatio > heightRatio ? heightRatio : widthRatio;

            const canvasWidth = canvas.width * ratio;
            const canvasHeight = canvas.height * ratio;

            const marginX = (pageWidth - canvasWidth) / 2;
            const marginY = (pageHeight - canvasHeight) / 2;

            doc.addImage(imgData, 'PNG', marginX, marginY, canvasWidth, canvasHeight);
            doc.save("certificate.pdf");
        });


    });


    const printAsPdf = () => {
        html2canvas(pageElement.current, {
            useCORS: true,
            allowTaint: true,
            scrollY: -window.scrollY,
        }).then(canvas => {
            const image = canvas.toDataURL('image/jpeg', 1.0);
            const doc = new jsPDF('p', 'px', 'a4');
            const pageWidth = doc.internal.pageSize.getWidth();
            const pageHeight = doc.internal.pageSize.getHeight();

            const widthRatio = pageWidth / canvas.width;
            const heightRatio = pageHeight / canvas.height;
            const ratio = widthRatio > heightRatio ? heightRatio : widthRatio;

            const canvasWidth = canvas.width * ratio;
            const canvasHeight = canvas.height * ratio;

            const marginX = (pageWidth - canvasWidth) / 2;
            const marginY = (pageHeight - canvasHeight) / 2;

            doc.addImage(image, 'JPEG', marginX, marginY, canvasWidth, canvasHeight);
            doc.output('dataurlnewwindow');
        });
    };

</script>
</body>


</html>
