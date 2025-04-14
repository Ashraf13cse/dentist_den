

<?php $__env->startSection('content'); ?>

  
<!-- Header Start -->
<div class="container-fluid d-flex align-items-center justify-content-center text-center" id="home">
    <!-- Overlay for Better Visibility -->
    <div class="overlay"></div>

    <div class="content">
        <h3 class="font-weight-bold mb-3 animated fadeInUp">Welcome to</h3>
        <h1 class="display-3 text-uppercase mb-2 font-weight-bold animated fadeInUp" style="-webkit-text-stroke: 2px #ffffff;">
            <?php echo e($user?->name); ?>

        </h1>
       
        <div class="typed-text d-inline-block">Dental Care Specialists</div>
      
    </div>
</div>
<!-- Header End -->

<style>
    /* Fullscreen Background */
    #home {
        position: relative;
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: url('<?php echo e(asset('storage/' . str_replace('public/', '', $user->profile_pic))); ?>') no-repeat center center/cover;
    }

    /* Full Dark Overlay for Better Text Visibility */
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Dark background for text visibility */
        z-index: 1;
    }

    /* Text Content */
    .content {
        position: relative;
        z-index: 2;
        color: white;
        max-width: 80%;
    }
    .typed-text {
    display: inline-block;
    color: rgb(0, 255, 234) !important; 
    font-weight: 500;
    text-shadow: 1px 1px 3px rgba(17, 15, 15, 0.8);
    font-size: 1.8rem;
}
</style>
    <!-- Header End -->

    <div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
            <h1 class="position-absolute text-uppercase text-primary">About Us</h1>
        </div>
        <div class="row align-items-center">
            <!-- Left Side: Chamber Information -->
            <div class="col-lg-5 pb-4 pb-lg-0">
                <h3 class="mb-4">Our Chambers</h3>
                <!-- Chamber 1 -->
                <div class="mb-4">
                    <h5>Chamber 1</h5>
                    <p><strong>Location:</strong> <?php echo e($user?->job); ?></p>
                    <!-- Google Maps Embed for Chamber 1 -->
                    <div class="embed-responsive embed-responsive-16by9 mb-3">
                        <iframe
                            class="embed-responsive-item"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.789123456789!2d90.12345678901234!3d23.123456789012345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDA3JzI0LjQiTiA5MMKwMDcnMjQuNCJF!5e0!3m2!1sen!2sbd!4v1234567890123!5m2!1sen!2sbd"
                            allowfullscreen
                            loading="lazy"
                        ></iframe>
                    </div>
                </div>
                <!-- Chamber 2 -->
                <div class="mb-4">
                    <h5>Chamber 2</h5>
                    <p><strong>Location:</strong> <?php echo e($user?->address); ?></p>
                    <!-- Google Maps Embed for Chamber 2 -->
                    <div class="embed-responsive embed-responsive-16by9 mb-3">
                        <iframe
                            class="embed-responsive-item"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29515.04329919692!2d91.83990886976287!3d22.377012130758096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad2797264dcb9b%3A0xc086b81d77d76ad5!2z4Kau4KeH4Kah4Ka_4KaV4KeH4KayIOCmuOCnjeCmleCmr-CmvOCmvuCmsA!5e0!3m2!1sen!2sbd!4v1741461028220!5m2!1sen!2sbd"
                            allowfullscreen
                            loading="lazy"
                        ></iframe>
                    </div>
                </div>
            </div>
            <!-- Right Side: Visiting Hours and Other Details -->
            <div class="col-lg-7">
                <h3 class="mb-4">Visiting Hours</h3>
                 <P><?php echo e($user?->birth_day); ?></p>
                <div class="row mb-3">
                    <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary"><?php echo e($user?->experience); ?> </span></h6></div>
                    <div class="col-sm-6 py-2">
    <h6><i class="fas fa-phone-alt text-primary mr-2"></i>সিরিয়াল নিতে: <span class="text-secondary"><?php echo e($user?->phone); ?></span></h6>
</div>
<div class="col-sm-6 py-2">
    <h6><i class="fas fa-envelope text-primary mr-2"></i>Email: <span class="text-secondary"><?php echo e($user?->email); ?></span></h6>
</div>
                    <div class="col-sm-6 py-2">
                        <h6>Time: <span class="text-secondary">
                        <?php echo e($user?->degree); ?>

                        
                        </span></h6> 
                    </div>

                    <a href="https://wa.me/<?php echo e($user?->phone); ?>?text=Hello%20Dr.%20Sami%20Uddin,%20I%20would%20like%20to%20book%20an%20appointment." class="btn btn-success mr-4" target="_blank">
                    <i class="fab fa-whatsapp mr-2"></i>Book Appointment on WhatsApp
                </a>
                </div>
                <a href="#contact" class="btn btn-outline-primary mr-4">Review Us</a>
            </div>
        </div>
    </div>
</div>
    

    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase text-primary">Education & Experience</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4">Dr. Sami Uddin</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo e($education->title); ?><strong>(<?php echo e($education->description); ?>)</strong></h5>
                            
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Dr. Israt Hasin</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"><?php echo e($experience->title); ?><strong>(<?php echo e($experience->description); ?>)</h5>
                           
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="container-fluid py-5 bg-light" id="service">
    <div class="container">
        <!-- Section Title -->
        <div class="text-center mb-5">
            <h1 class="display-4 text-uppercase text-primary font-weight-bold">Our Services</h1>
            <p class="text-muted">We provide top-quality services tailored to your needs.</p>
        </div>

        <!-- Services Grid -->
        <div class="row">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-lg border-0 rounded-lg text-center p-4 h-100">
                        <!-- Icon -->
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <i class="<?php echo e($service->icon); ?> text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <!-- Title with Highlight -->
                        <h3 class="font-weight-bold text-dark text-uppercase"><?php echo e($service->name); ?></h3>
                        <!-- Description -->
                        <p class="text-muted"><?php echo e($service->description); ?></p>
                        <!-- Price -->
                        <div class="mt-auto">
                            <span class="badge badge-pill badge-danger px-3 py-2 font-weight-bold" style="font-size: 1rem;">
                            Price: <?php echo e($service->icon); ?>

                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

   
<!-- Portfolio Start -->
 <div class="container-fluid pt-5 pb-3" id="portfolio"> 
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
            <h1 class="position-absolute text-uppercase text-primary">Our Work</h1>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-sm btn-outline-primary m-1 active" data-filter="*">All</li>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".<?php echo e($category->name); ?>"><?php echo e($category->name); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 mb-4 portfolio-item <?php echo e($portfolio->category->name); ?>">
                <div class="position-relative overflow-hidden mb-2">
                     <!-- Image Container with Fixed Size  -->
                    <div class="image-container" style="width: 100%; height: 250px; overflow: hidden;">
                        <img class="img-fluid rounded w-100 h-100" src="<?php echo e(asset('storage/' . str_replace('public/', '', $portfolio->image))); ?>" alt="Treatment Image" style="object-fit: cover;">
                    </div>
                    <!-- Title and Description -->
                    <div class="mt-3">
                        <h5 class="text-center"><?php echo e($portfolio->title); ?></h5>
                        <p class="text-center"><?php echo e($portfolio->description); ?></p>
                    </div>
                    <!-- Portfolio Button -->
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="<?php echo e(asset('storage/' . str_replace('public/', '', $portfolio->image))); ?>" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 50px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div> 

<!-- Portfolio End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5" id="testimonial">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Review</h1>
                <h1 class="position-absolute text-uppercase text-primary">Patients Say</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <?php $__currentLoopData = $reviewers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4"><?php echo e($review->description); ?></h4>
                            <!-- <img class="img-fluid rounded-circle mx-auto mb-3" src="<?php echo e(asset("storage/$review->image")); ?>" style="width: 80px; height: 80px;"> -->
                            <h5 class="font-weight-bold m-0"><?php echo e($review->name); ?> </h5>
                            <!-- <span><?php echo e($review->job); ?></span> -->
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

   
    <div class="container-fluid py-5" id="contact">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
            <h1 class="position-absolute text-uppercase text-primary">Contact Us</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form text-center">
                    <?php if(Session::has('message')): ?>
                    <div class="alert alert-primary" role="alert">
                        <?php echo e(Session::get('message')); ?>

                    </div>
                    <br>
                    <?php endif; ?>
                    <form id="contactForm" method="POST" action="<?php echo e(route('contact')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-row">
                            <div class="control-group col-sm-6">
                                <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                    required name="name" value="<?php echo e(old('name')); ?>" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group col-sm-6">
                                <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                    required name="email" value="<?php echo e(old('email')); ?>" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="control-group col-sm-6">
                                <input type="text" class="form-control p-4" id="phone" placeholder="Your Phone Number"
                                    required name="phone" value="<?php echo e(old('phone')); ?>" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group col-sm-6">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                    required name="subject_mail" value="<?php echo e(old('subject_mail')); ?>" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                name="content" required><?php echo e(old('content')); ?></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                        <?php if($errors->any()): ?>
                        <br>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
        <!-- WhatsApp and Social Media Section -->
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8 text-center">
                <h3 class="mb-4">Or Contact Us Via</h3>
                <a href="https://wa.me/<?php echo e($user?->phone); ?>?text=Hello%20Dr.%20Sami%20Uddin,%20I%20would%20like%20to%20book%20an%20appointment." class="btn btn-success mr-3" target="_blank">
                    <i class="fab fa-whatsapp mr-2"></i>WhatsApp
                </a>
                <a href="tel:<?php echo e($user?->phone); ?>" class="btn btn-primary mr-3">
                    <i class="fas fa-phone-alt mr-2"></i>Call Now
                </a>
                <a href="https://www.facebook.com/profile.php?id=100078785626979" class="btn btn-info mr-3" target="_blank">
                    <i class="fab fa-facebook-f mr-2"></i>Facebook
                </a>
                
            </div>
        </div>
       
    </div>
</div>
<!-- Contact End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            
            <div class="d-flex justify-content-center mb-3">
                <a class="text-white" href="#">Privacy</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Terms</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">FAQs</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Help</a>
            </div>
            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">By Novire org.</a> All Rights Reserved. Any Software Consultaion Contact: 01521-487154</p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dentistden\dentistden\resources\views/home.blade.php ENDPATH**/ ?>