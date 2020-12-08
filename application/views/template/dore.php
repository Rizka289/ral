<?php
// $data_head = isset($data_head) ? $data_head : null;
$data_head = array(
    'resource' => $resource,
    'extra_js' => isset($extra_js) ? $extra_js : null,
    'sembunyikanSidebar' => isset($sembunyikanSidebar) ? $sembunyikanSidebar : null,
    'extra_css' => isset($extra_css) ? $extra_css : null
);
include_view('head/main', $data_head);
if (isset($navbar) && !is_array($navbar))
    include_view($navbar, $navbarConf);
if (isset($sidebar) && !is_array($sidebar))
    include_view($sidebar, $sidebarConf);
if (!isset($data_content))
    $data_content = null;

?>
<main>
    <div class="container-fluid" style="<?php echo isset($ada_bg) && $ada_bg ? "background: url('" . $bg_url . "') no-repeat" : null ?>">
        <div class="col-12">
            <h1><?php echo isset($pageName) ? $pageName : null ?></h1>
            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item">
                        <p><?php echo isset($subPageName) ? $subPageName : null ?></p>
                    </li>
                </ol>
            </nav>
            <div class="separator mb-5"></div>

        </div>
        <?php
        if (isset($content) && !empty($content)) {
            if (is_array($content)) {
                foreach ($content as $c) {
                    include_view($c, $data_content);
        ?>
                    <br>
        <?php }
            } else
                include_view($content, $data_content);
        }
        ?>
    </div>
</main>
<?php
$dataFoot = array(
    'resource' => $resource, 
    'adaThemeSelector' => isset($adaThemeSelector) ? $adaThemeSelector : null,
    'extra_js' => isset($extra_js) ? $extra_js : null, 
    'extra_css' => isset($extra_css) ? $extra_css : null
);
include_view('foot/main', $dataFoot);