<header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
    <div class="container-xl">
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="javascript:void(0)">
                <img src="<?= base_url()?>assets/static/logo.svg" width="24" height="24" alt="Tabler" class="navbar-brand-image">
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown d-md-flex ">
                <div>
                    <svg width="20" height="20">
                        <use xlink:href="<?= base_url()?>assets/tabler-icons-1.39.1/tabler-sprite.svg#tabler-alarm" />
                    </svg>
                    <b><span id="waktu"><?= $tes['waktu']?> Menit</span></b>
                </div>
            </div>
        </div>
    </div>
</header>