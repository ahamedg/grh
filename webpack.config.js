var Encore = require('@symfony/webpack-encore');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or sub-directory deploy
    //.setManifestKeyPrefix('build/')

    /*
     * ENTRY CONFIG
     *
     * Add 1 entry for each "page" of your app
     * (including one that's included on every page - e.g. "app")
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
     */
    .addStyleEntry('css/style', [
        './node_modules/bootstrap/dist/css/bootstrap.min.css',
        './node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css',
        './node_modules/@fortawesome/fontawesome-free/css/regular.min.css',
        './node_modules/@fortawesome/fontawesome-free/css/solid.min.css',
        './node_modules/@sweetalert2/theme-bootstrap-4/bootstrap-4.min.css',
        './node_modules/admin-lte/dist/css/adminlte.css',
        './node_modules/jquery-ui-dist/jquery-ui.min.css',
        './node_modules/datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css',
        './node_modules/jsgrid/dist/jsgrid.min.css',
        './node_modules/admin-lte/plugins/sweetalert2/sweetalert2.min.css',
        './node_modules/admin-lte/plugins/toastr/toastr.min.css',
        './node_modules/admin-lte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css',
        './node_modules/admin-lte/plugins/bootstrap-slider/css/bootstrap-slider.min.css',
        './node_modules/admin-lte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css',
        './node_modules/admin-lte/plugins/chart.js/Chart.min.css',
        './node_modules/admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css',
        './node_modules/admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css',
        './node_modules/admin-lte/plugins/datatables-scroller/css/scroller.bootstrap4.min.css',
        './node_modules/admin-lte/plugins/datatables-select/css/select.bootstrap4.min.css',
        './node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css',
        './node_modules/admin-lte/plugins/ekko-lightbox/ekko-lightbox.css',
        './node_modules/admin-lte/plugins/flag-icon-css/css/flag-icon.min.css',
        './node_modules/admin-lte/plugins/fullcalendar/main.min.css',
        './node_modules/admin-lte/plugins/fullcalendar-bootstrap/main.min.css',
        './node_modules/admin-lte/plugins/fullcalendar-daygrid/main.min.css',
        './node_modules/admin-lte/plugins/fullcalendar-timegrid/main.min.css',
        './node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        './node_modules/admin-lte/plugins/ion-rangeslider/css/ion.rangeSlider.min.css',
        './node_modules/admin-lte/plugins/jqvmap/jqvmap.min.css',
        './node_modules/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        './node_modules/admin-lte/plugins/select2/css/select2.min.css',
        './node_modules/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css',
        './node_modules/admin-lte/plugins/summernote/summernote.css',
        './node_modules/admin-lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css',
        './node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
    ])
    .addEntry('js/app', [ 
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/jquery-knob-chif/dist/jquery.knob.min.js',
        './node_modules/jquery-mapael/js/jquery.mapael.min.js',
        './node_modules/jquery-mousewheel/jquery.mousewheel.js',
        './node_modules/jquery-ui-dist/jquery-ui.min.js',
        './node_modules/jquery-validation/dist/jquery.validate.min.js',
        './node_modules/admin-lte/plugins/popper/popper.js',
        './node_modules/admin-lte/plugins/bootstrap/js/bootstrap.min.js',
        './node_modules/admin-lte/dist/js/adminlte.js',
        './node_modules/datatables.net/js/jquery.dataTables.min.js',
        './node_modules/datatables.net-autofill/js/dataTables.autoFill.min.js',
        './node_modules/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js',
        './node_modules/datatables.net-buttons/js/buttons.colVis.min.js',
        './node_modules/datatables.net-buttons/js/buttons.flash.min.js',
        './node_modules/datatables.net-buttons/js/buttons.html5.min.js',
        './node_modules/datatables.net-buttons/js/buttons.print.min.js',
        './node_modules/datatables.net-buttons/js/dataTables.buttons.min.js',
        './node_modules/datatables.net-responsive/js/dataTables.responsive.min.js',
        './node_modules/datatables.net-scroller/js/dataTables.scroller.min.js',
        './node_modules/datatables.net-select/js/dataTables.select.min.js',
        './node_modules/daterangepicker/daterangepicker.js',
        './node_modules/jsgrid/dist/jsgrid.min.js',
        './node_modules/admin-lte/plugins/toastr/toastr.min.js',
        './node_modules/admin-lte/plugins/sweetalert2/sweetalert2.min.js',
        './node_modules/admin-lte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js',
        './node_modules/admin-lte/plugins/bootstrap-slider/bootstrap-slider.min.js',
        './node_modules/admin-lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js',
        './node_modules/admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js',
        './node_modules/admin-lte/plugins/chart.js/Chart.min.js',
        './node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.js',
        './node_modules/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js',
        './node_modules/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js',
        './node_modules/admin-lte/plugins/datatables-scroller/js/scroller.bootstrap4.min.js',
        './node_modules/admin-lte/plugins/datatables-select/js/select.bootstrap4.min.js',
        './node_modules/admin-lte/plugins/ekko-lightbox/ekko-lightbox.min.js',
        './node_modules/admin-lte/plugins/fastclick/fastclick.js',
        './node_modules/admin-lte/plugins/filterizr/filterizr.min.js',
        './node_modules/admin-lte/plugins/filterizr/jquery.filterizr.min.js',
        './node_modules/admin-lte/plugins/flot/jquery.flot.js',
        './node_modules/admin-lte/plugins/fullcalendar/main.min.js',
        './node_modules/admin-lte/plugins/fullcalendar/locales-all.min.js',
        './node_modules/admin-lte/plugins/fullcalendar-bootstrap/main.min.js',
        './node_modules/admin-lte/plugins/fullcalendar-daygrid/main.min.js',
        './node_modules/admin-lte/plugins/fullcalendar-interaction/main.min.js',
        './node_modules/admin-lte/plugins/fullcalendar-timegrid/main.min.js',
        './node_modules/admin-lte/plugins/inputmask/inputmask/jquery.inputmask.js',
        './node_modules/admin-lte/plugins/ion-rangeslider/js/ion.rangeSlider.min.js',
        './node_modules/admin-lte/plugins/jqvmap/jquery.vmap.min.js',
        './node_modules/admin-lte/plugins/jszip/jszip.min.js',
        './node_modules/admin-lte/plugins/overlayScrollbars/js/OverlayScrollbars.min.js',
        './node_modules/admin-lte/plugins/pace-progress/pace.min.js',
        './node_modules/admin-lte/plugins/pdfmake/pdfmake.min.js',
        './node_modules/admin-lte/plugins/raphael/raphael.min.js',
        './node_modules/admin-lte/plugins/select2/js/select2.full.min.js',
        './node_modules/admin-lte/plugins/sparklines/sparkline.js',
        './node_modules/admin-lte/plugins/summernote/summernote.min.js',
        './node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
    ])
    //.addEntry('page1', './assets/js/page1.js')
    //.addEntry('page2', './assets/js/page2.js')

    // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
    .splitEntryChunks()

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // enables @babel/preset-env polyfills
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = 3;
    })

    // enables Sass/SCSS support
    //.enableSassLoader()

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment to get integrity="..." attributes on your script & link tags
    // requires WebpackEncoreBundle 1.4 or higher
    //.enableIntegrityHashes(Encore.isProduction())

    // uncomment if you're having problems with a jQuery plugin
    //.autoProvidejQuery()

    // uncomment if you use API Platform Admin (composer req api-admin)
    //.enableReactPreset()
    //.addEntry('admin', './assets/js/admin.js')
;

module.exports = Encore.getWebpackConfig();
