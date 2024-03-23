<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="#">Toko Batik 7</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo e($active === 'home' ? 'active' : ''); ?>" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e($active === 'about' ? 'active' : ''); ?>" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e($active === 'posts' ? 'active' : ''); ?>" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e($active === 'categories' ? 'active' : ''); ?>" href="/categories">Category</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo e($active === 'login' ? 'active' : ''); ?>" href="/login"><i
                            class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>
<?php /**PATH D:\Laravel\Website_Belajar\resources\views/partials/navbar.blade.php ENDPATH**/ ?>