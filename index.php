<?php include 'header.php'; ?>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden border-b border-black/10">
        
        <div class="relative max-w-7xl mx-auto px-6 text-center z-10" data-aos="fade-up" data-aos-duration="1000">
            <!-- <a href="index.php" class="flex items-center">
                <img src="logo.png" alt="HOME STITCH" class="h-16 md:h-20 lg:h-24 w-auto object-contain mix-blend-multiply">
            </a> -->
            <h1 class="text-6xl md:text-8xl font-bold mb-6 tracking-tight brand-font">Home Stitch,<br> <span class="italic font-normal">Bespoke Tailoring.</span></h1>
            <p class="text-lg md:text-xl text-gray-800 mb-12 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Experience the luxury of custom tailoring from the comfort of your home. We measure, stitch, and deliver perfect fits for your entire family.
            </p>
            <div data-aos="fade-up" data-aos-delay="400">
                <a href="#book" class="inline-block bg-brand-black text-brand-bg text-lg font-bold uppercase tracking-widest px-10 py-4 rounded-full shadow-xl hover:bg-gray-800 transition transform hover:-translate-y-1">
                    Book Your Visit
                </a>
            </div>
        </div>
    </section>

    <section  class="py-24  border-b border-black/10">
        <div style="background-color:#d6d3cd;" class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-in">
                <p class="text-sm font-bold uppercase tracking-widest text-gray-500 mb-4">Our Collections</p>
                <h2 class="text-4xl md:text-5xl font-bold brand-font text-brand-black">Crafted For Everyone</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <a href="women.php" class="group relative overflow-hidden bg-white h-[600px] block" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?q=80&w=1983&auto=format&fit=crop" alt="Women" class="w-full h-full object-cover transition duration-1000 group-hover:scale-105 group-hover:opacity-80">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h3 class="text-4xl brand-font font-bold text-white tracking-wider bg-brand-black/40 px-10 py-4 backdrop-blur-sm border border-white/20 transition duration-500 group-hover:bg-brand-black/60">WOMEN</h3>
                    </div>
                </a>
                
                <a href="men.php" class="group relative overflow-hidden bg-white h-[600px] block" data-aos="fade-up" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1584184924103-e310d9dc82fc?q=80&w=2080&auto=format&fit=crop" alt="Men" class="w-full h-full object-cover transition duration-1000 group-hover:scale-105 group-hover:opacity-80">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h3 class="text-4xl brand-font font-bold text-white tracking-wider bg-brand-black/40 px-10 py-4 backdrop-blur-sm border border-white/20 transition duration-500 group-hover:bg-brand-black/60">MEN</h3>
                    </div>
                </a>
                
                <a href="kids.php" class="group relative overflow-hidden bg-white h-[600px] block" data-aos="fade-up" data-aos-delay="500">
                    <img src="https://images.unsplash.com/photo-1518831959646-742c3a14ebf7?q=80&w=2008&auto=format&fit=crop" alt="Kids" class="w-full h-full object-cover transition duration-1000 group-hover:scale-105 group-hover:opacity-80">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h3 class="text-4xl brand-font font-bold text-white tracking-wider bg-brand-black/40 px-10 py-4 backdrop-blur-sm border border-white/20 transition duration-500 group-hover:bg-brand-black/60">KIDS</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="py-24 border-b border-black/10 bg-white/40">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20" data-aos="fade-up">
                <p class="text-sm font-bold uppercase tracking-widest text-gray-500 mb-4">Seamless Experience</p>
                <h2 class="text-4xl md:text-5xl font-bold brand-font text-brand-black">The Process</h2>
            </div>
            
            <div class="grid md:grid-cols-4 gap-12 text-center">
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 border-2 border-brand-black rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 brand-font">1</div>
                    <h3 class="text-xl font-bold mb-3 uppercase tracking-wide">Book Online</h3>
                    <p class="text-gray-700">Schedule a time that works best for your routine.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 border-2 border-brand-black rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 brand-font">2</div>
                    <h3 class="text-xl font-bold mb-3 uppercase tracking-wide">Home Visit</h3>
                    <p class="text-gray-700">Our expert tailor arrives to take precise measurements.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 border-2 border-brand-black rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 brand-font">3</div>
                    <h3 class="text-xl font-bold mb-3 uppercase tracking-wide">Master Stitching</h3>
                    <p class="text-gray-700">We craft your attire with premium finishing and care.</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 border-2 border-brand-black rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6 brand-font">4</div>
                    <h3 class="text-xl font-bold mb-3 uppercase tracking-wide">Delivery</h3>
                    <p class="text-gray-700">Your perfectly fitted garment is brought directly to you.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 border-b border-black/10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <p class="text-sm font-bold uppercase tracking-widest text-gray-500 mb-4">Custom Crafters</p>
                <h2 class="text-4xl md:text-5xl font-bold brand-font text-brand-black mb-6">Customized Solutions</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Home Stitch craftsmen present a perfect balance of style and finesse complementing your persona.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-y-16 gap-x-8">
                <div class="md:border-r border-black/10 text-center flex flex-col items-center px-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 mb-6 text-brand-black">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14.25 7.5a2.25 2.25 0 01-2.25-2.25m0 0a2.25 2.25 0 012.25-2.25M12 5.25v13.5m-4.5-3a4.5 4.5 0 100-9 4.5 4.5 0 000 9z"></path></svg>
                    </div>
                    <h3 class="text-2xl brand-font font-bold mb-3">Doorstep Designer</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Book comfort-based designer services directly at your doorstep.</p>
                </div>
                <div class="md:border-r border-black/10 text-center flex flex-col items-center px-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 mb-6 text-brand-black">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"></path></svg>
                    </div>
                    <h3 class="text-2xl brand-font font-bold mb-3">E-designer</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Schedule a virtual call with our e-designer at your convenience.</p>
                </div>
                <div class="text-center flex flex-col items-center px-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 mb-6 text-brand-black">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"></path></svg>
                    </div>
                    <h3 class="text-2xl brand-font font-bold mb-3">Personal Stylist</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Live a celebrity life as our stylist will keep you in vogue.</p>
                </div>

                <div class="md:border-r border-black/10 text-center flex flex-col items-center mt-8 px-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 mb-6 text-brand-black">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7.498 15.25H4.372c-1.026 0-1.945-.694-2.054-1.715a12.137 12.137 0 01-.068-1.285c0-2.848.992-5.464 2.649-7.521C5.287 4.247 5.886 4 6.504 4h4.016a4.5 4.5 0 011.423.23l3.114 1.04a4.5 4.5 0 001.423.23h1.294M7.498 15.25c.618 0 .991.724.725 1.282A7.471 7.471 0 008.25 18.75a7.47 7.47 0 001.527 4.536c.266.558-.107 1.282-.725 1.282H4.372c-1.026 0-1.945-.694-2.054-1.715a12.137 12.137 0 01-.068-1.285c0-2.848.992-5.464 2.649-7.521C5.287 4.247 5.886 4 6.504 4h4.016a4.5 4.5 0 011.423.23l3.114 1.04a4.5 4.5 0 001.423.23h1.294M12 18.75h.008v.008H12v-.008zM15 18.75h.008v.008H15v-.008zM18 18.75h.008v.008H18v-.008z"></path></svg>
                    </div>
                    <h3 class="text-2xl brand-font font-bold mb-3">Alteration & Repair</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Refurbish your much-loved outfits for a perfect fit.</p>
                </div>
                <div class="md:border-r border-black/10 text-center flex flex-col items-center mt-8 px-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 mb-6 text-brand-black">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"></path></svg>
                    </div>
                    <h3 class="text-2xl brand-font font-bold mb-3">Wedding Services</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Make your D-Day memorable with exclusive couture.</p>
                </div>
                <div class="text-center flex flex-col items-center mt-8 px-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 mb-6 text-brand-black">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"></path></svg>
                    </div>
                    <h3 class="text-2xl brand-font font-bold mb-3">Upcycling</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">Renew your old outfits and transform them to a new attire.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="book" class="py-24">
        <div class="max-w-5xl mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-16">
                
                <div class="md:w-5/12 flex flex-col justify-center" data-aos="fade-right">
                    <p class="text-sm font-bold uppercase tracking-widest text-gray-500 mb-4">Start Now</p>
                    <h2 class="text-4xl md:text-5xl font-bold brand-font mb-6">Request a Visit</h2>
                    <p class="mb-10 text-gray-800 text-lg leading-relaxed">Fill out the details, and our master tailor will arrive at your home for a professional measurement session.</p>
                    <ul class="space-y-6 text-base font-semibold uppercase tracking-wide">
                        <li class="flex items-center"><span class="w-8 h-[2px] bg-brand-black mr-4"></span> Men, Ladies & Kids</li>
                        <li class="flex items-center"><span class="w-8 h-[2px] bg-brand-black mr-4"></span> Casual & Party Wear</li>
                        <li class="flex items-center"><span class="w-8 h-[2px] bg-brand-black mr-4"></span> Bespoke Quality</li>
                    </ul>
                </div>
                
                <div class="md:w-7/12 bg-white/60 p-8 md:p-12 rounded-3xl shadow-sm border border-black/5 backdrop-blur-sm" data-aos="fade-left">
                    
                    <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                        <div class="bg-brand-black text-brand-bg px-6 py-4 rounded-lg mb-8 text-center font-semibold animate-pulse">
                            Booking successful! We will contact you shortly.
                        </div>
                    <?php endif; ?>

                    <form action="book_appointment.php" method="POST" enctype="multipart/form-data" class="space-y-8">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-widest text-gray-500">Full Name</label>
                                <input type="text" name="full_name" required class="w-full minimal-input text-lg">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-widest text-gray-500">Phone Number</label>
                                <input type="tel" name="phone" required class="w-full minimal-input text-lg">
                            </div>
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-sm font-bold uppercase tracking-widest border-b border-black/10 pb-2">Home Address</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-500">House / Flat No.</label>
                                    <input type="text" name="house_number" required class="w-full minimal-input text-lg">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-500">Street / Locality</label>
                                    <input type="text" name="street" required class="w-full minimal-input text-lg">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-500">Pincode</label>
                                    <input type="text" name="pincode" required class="w-full minimal-input text-lg">
                                </div>
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-500">State</label>
                                    <input type="text" name="state" required class="w-full minimal-input text-lg">
                                </div>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-sm font-bold uppercase tracking-widest border-b border-black/10 pb-2">Measurement Details</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Category</label>
                                    <select name="person_type" class="w-full minimal-input text-lg bg-transparent">
                                        <option value="Men">Men</option>
                                        <option value="Ladies">Ladies</option>
                                        <option value="Kids">Kids</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Cloth Type</label>
                                    <select name="cloth_type" class="w-full minimal-input text-lg bg-transparent">
                                        <option value="Casual">Casual</option>
                                        <option value="Party Wear">Party Wear</option>
                                    </select>
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Preferred Date & Time</label>
                                    <input type="datetime-local" name="appointment_date" required class="w-full minimal-input text-lg bg-transparent">
                                </div>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <h3 class="text-sm font-bold uppercase tracking-widest border-b border-black/10 pb-2">Optional Details</h3>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-widest text-gray-500 mb-2">Reference Image</label>
                                <input type="file" name="reference_image" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-bold file:uppercase file:tracking-widest file:bg-brand-black file:text-brand-bg hover:file:bg-gray-800 transition">
                            </div>
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-widest text-gray-500">Additional Notes</label>
                                <textarea name="additional_note" rows="2" placeholder="Any specific design requests or instructions..." class="w-full minimal-input text-lg resize-none mt-2"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-brand-black text-brand-bg font-bold uppercase tracking-widest py-4 rounded-full mt-8 hover:bg-gray-800 transition duration-300 transform hover:scale-[1.02]">Confirm Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800, // animation length in ms
            easing: 'ease-out-cubic',
            once: true, // whether animation should happen only once while scrolling down
            offset: 50, // offset (in px) from the original trigger point
        });
    </script>

<?php include 'footer.php'; ?>