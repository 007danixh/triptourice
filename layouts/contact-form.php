 <style>
     .formErr {
         color: red;
     }
 </style>

 <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
     <section class="ftco-section contact-section ftco-degree-bg">
         <div class="container">
             <div class="row d-flex mb-5 contact-info">
                 <div class="col-md-12 mb-4">
                     <h2 class="h4">Contact Information</h2>
                 </div>
                 <div class="w-100"></div>
                 <div class="col-md-3">
                     <p><span>Address:</span> <a href="https://goo.gl/maps/iT4Gfqn4DweRbCbn7">Barbar Shah, Habba Kadal, Srinagar, Jammu and Kashmir 190001</a></p>
                 </div>
                 <div class="col-md-3">
                     <p><span>Phone:</span> <a href="tel:919541403714">+91 9541 403 714</a></p>
                 </div>
                 <div class="col-md-3">
                     <p><span>Email:</span> <a href="mailto:info@triptourice.com">info@triptourice.com</a></p>
                 </div>
                 <div class="col-md-3">
                     <p><span>Website:</span> <a href="#">triptourice.com</a></p>
                 </div>
             </div>
             <div class="row block-9">
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


                 <div class="col-md-6" id="map"></div>
             </div>

         </div>
     </section>
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
