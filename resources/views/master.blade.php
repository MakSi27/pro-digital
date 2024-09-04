<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.meta')
    @include('components.head_scripts')
    @yield('head_scripts')
</head>
<body
        class="page-template page-template-elementor_header_footer page page-id-1519 wp-embed-responsive theme-choicy woocommerce-no-js no-sidebar elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-1519">

        <div class="page-wrapper">
            @include('components.pre-loader')
    @include('components.header')
    
    <main>
        @yield('main_content')
    </main>

    @include('components.footer')
    @include('components.footer_scripts')
    @yield('footer_scripts')
    
</body>
</html>