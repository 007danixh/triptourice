 <style>
     .formErr {
         color: red;
     }
 </style>

 <!-- <div class="container-xxl py-5">
     <div class="container py-5 px-lg-5">
         <div class="wow fadeInUp" data-wow-delay="0.1s">
             <p class="section-title text-secondary justify-content-center"><span></span>Contact Us<span></span></p>
             <h1 class="text-center mb-5">Contact For Any Query</h1>
         </div>
         <div class="row justify-content-center">
             <div class="col-lg-7">
                 <div class="wow fadeInUp" data-wow-delay="0.3s">
                     <form name="conForm" action="./layout/contact-form-logic" method="POST" class="contact-form" onsubmit=" return validateForm()">
                     
                         <div class="row g-3">
                             <div class="col-md-6">
                                 <div class="form-floating">
                                     <input type="text" class="form-control"  name="name" required placeholder="Your Name">
                                     <label for="name">Your Name</label>
                                     <span class="formErr" id="name"></span>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-floating">
                                     <input type="email" class="form-control"  name="email" required placeholder="Your Email">
                                     <label for="email">Your Email</label>
                                     <span class="formErr" id="email"></span>
                                 </div>
                             </div>
                             <div class="col-12">
                                 <div class="form-floating">
                                     <input type="text" class="form-control" id="subject" name="phone" required placeholder="Phone No.">
                                     <label for="subject">Contact No.</label>
                                     <span class="formErr" id="phone"></span>
                                 </div>
                             </div>
                             <div class="col-12">
                                 <div class="form-floating">
                                     <textarea class="form-control" placeholder="Leave a message here" name="message" style="height: 150px"></textarea>
                                     <label for="message">Message</label>
                                     <span class="formErr" id="message"></span>
                                 </div>
                             </div>
                             <div class="col-12">
                                 <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Send Message</button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div> -->

 <div class="col-md-6 pr-md-5">
     <form name="conForm" action="./layouts/contact-form-logic" method="POST" class="contact-form" onsubmit=" return validateForm()">
         <div class="form-group">
             <input type="text" name="name" class="form-control" required placeholder="Your Name">
             <span class="formErr" id="name"></span>
         </div>
         <div class="form-group">
             <input type="email" name="email" class="form-control" required placeholder="Your Email">
             <span class="formErr" id="email"></span>
         </div>
         <div class="form-group">
             <input type="text" class="form-control" name="phone" required placeholder="Phone No.">
             <span class="formErr" id="phone"></span>
         </div>
         <div class="form-group">
             <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
             <span class="formErr" id="message"></span>
         </div>
         <div class="form-group">
             <button type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5"> Send Message </button>
         </div>
     </form>

 </div>




 <script>
     //   Clear errors
     function clearErrors() {
         element = document.getElementsByClassName('formErr');
         for (let item of element) {
             item.textContent = "";
         }
     }

     //set errors
     function setError(id, error) {

         element = document.getElementById(id);
         element.textContent = error;


     }

     //validate errors
     function validateForm() {

         var returnval = true;
         clearErrors();
         var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
         var name = document.forms['conForm']['name'].value;
         var email = document.forms['conForm']['email'].value;
         var phone = document.forms['conForm']['phone'].value;
         var message = document.forms['conForm']['message'].value;

         if (name.length < 5) {

             setError('name', '* Length of name is too short');
             returnval = false;
         }

         if (phone.length < 10) {

             setError('phone', '* Phone number should be at least 10 digits.');
             returnval = false;
         }
         if (phone.length > 18) {

             setError('phone', '* Phone number should be at least 10 digits.');
             returnval = false;
         }
         if (message.length < 2) {

             setError('message', '* Message should  be greater than 20 characters');
             returnval = false;
         }
         if (message.length > 255) {

             setError('message', '* Message should not be greater than 255 characters');
             returnval = false;
         }
         if (!email.match(validRegex)) {
             setError('email', '* Email must be of type email.');
             returnval = false;
         }

         return returnval;
     }
 </script>
