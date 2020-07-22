<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" ></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Details</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Journey</a></li>  
                <?php if(Route::has('login')): ?>
						    <p class="mb-0 register-link">
                                <?php if(auth()->guard()->check()): ?>
                               <a href="<?php echo e(url('home')); ?>">Home</a>
                                <?php else: ?>
                               <a href="<?php echo e(route('login')); ?>">Login</a>

                              <?php if(Route::has('register')): ?>
                              <a href="<?php echo e(route('register')); ?>">Register</a>
                            <?php endif; ?>
                           <?php endif; ?>
                            </p>
                            <?php endif; ?>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\webpage\resources\views/layouts/partials/nav.blade.php ENDPATH**/ ?>