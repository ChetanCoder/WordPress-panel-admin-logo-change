//admin login icon
if( !function_exists( 'custom_login_logo' ) ){
    function custom_login_logo() {
        echo '<style>
            h1 a { background-image: url("#") !important; }
        </style>';
    }
    add_action( 'login_head', 'custom_login_logo' );
}
