<script src="{{ asset('assets/js/loader.js') }}"></script>
<link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/structure.css') }}" rel="stylesheet" type="text/css" class="structure" />

<link href="{{ asset('plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('plugins/font-icons/fontawesome/css/fontawesome.css') }}" rel="stylesheet" type="text/css" />
<link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/css/elements/avatar.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('plugins/notification/snackbar/snackbar.min.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/css/widgets/modules-widgets.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}" rel="stylesheet" type="text/css" />

<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/apps/scrumboard.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/apps/notes.css') }}">

<style>
    aside {
        display: none !important;
    }

    .page-item.active .page-link {
        z-index: 3;
        color: #ffffff;
        background-color: #3b3f5c;
        border-color: #3b3f5c;
    }

    @media (max-width:480px) {
        .mtmobile {
            margin-bottom: 20px !important;
        }

        .mbmobile {
            margin-bottom: 10px !important;
        }

        .hideonm {
            display: none !important;
        }

        .indblock {
            display: block;
        }



    }

    #sidebar ul.menu-categories li.menu>.dropdown-toggle svg {
        color: #e3e7ed !important;
        margin-right: 10px;
        vertical-align: middle;
        width: 20px;
        height: 20px;
        fill: rgba(0, 23, 55, 0.08);
        stroke-width: 1.6;
    }

    #sidebar ul.menu-categories li.menu>.dropdown-toggle {
        display: flex;
        justify-content: space-between;
        cursor: pointer;
        font-size: 13px;
        color: #f7faff !important;
        padding: 11px 14px;
        transition: .600s;
        margin-bottom: 4px;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .connect-sorting {
        background: #1a1c2d !important;
    }

    .card {
        border: 1px solid #0e1726;
        border-radius: 6px;
        background: #060818 !important;
    }

</style>


@livewireStyles
