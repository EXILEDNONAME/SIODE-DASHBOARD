<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
  @include('includes.toolbar-mobile')
  <div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
      <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
        @include('includes.logo-desktop')
        @include('includes.sidebar')
      </div>

      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <div id="kt_header" class="header header-fixed">
          <div class="container-fluid d-flex align-items-stretch justify-content-between">
            @include('includes.header-menu-left')
            @include('includes.header-menu-right')
          </div>
        </div>

        <!-- CONTENT -->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          @include('includes.subheader')

          <div class="d-flex flex-column-fluid">
            <div class="container">
              <p>Page content goes here...</p>
            </div>
          </div>
        </div>

        @include('includes.footer')

      </div>
    </div>
  </div>

  @include('includes.scroll-top')
  @include('includes.js')

</body>
</html>
