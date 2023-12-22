<footer class="footer">
      <div class="footer__row">
        <div class="footer__company">
          <a href="/" class="footer__logo"><img src="{{asset('frontend/assets/img/logo-update.png')}}" height="40px" width="90px" alt="Tech Simians" /></a>
          <div class="footer__social">
            <a href="{{url('https://www.facebook.com/profile.php?id=100067748465412')}}" target="_blank" class="footer__social-icon"><img src="{{asset('frontend/assets/img/facebook.svg')}}" alt="Facebook"></a>
            <!-- <a href="#" target="_blank" class="footer__social-icon"><img src="{{asset('frontend/assets/img/youtube.svg')}}" alt="Youtube"></a> -->
            <!-- <a href="#" target="_blank" class="footer__social-icon"><img src="{{asset('frontend/assets/img/twitter.svg')}}" alt="Twitter"></a> -->
            <a href="{{url('https://www.instagram.com/techsimians/')}}" target="_blank" class="footer__social-icon"><img src="{{asset('frontend/assets/img/instagram.svg')}}" alt="Instagram"></a>
            <a href="{{url('https://www.linkedin.com/company/13608548/admin/feed/posts/')}}" target="_blank" class="footer__social-icon"><img src="{{asset('frontend/assets/img/linkedin.svg')}}" alt="LinkedIn"></a>
          </div>
          <!-- <div class="footer__copyright hide-on-mobile">©Tech Simians. All Rights Reserved <script>document.write(new Date().getFullYear())</script></div> -->
         
        </div>
        <div class="footer__accordian">
          <div class="footer__accordian-item">
            <div class="footer__accordian-title">Services</div>
            <div class="footer__accordian-content">
              <ul class="footer__menu">
                <li class="footer__menu-item"><a href="{{url('development')}}">Development</a></li>
                <li class="footer__menu-item"><a href="{{url('designing')}}">Designing</a></li>
                <li class="footer__menu-item"><a href="{{url('enterprise-solution')}}">Enterprice Solutions</a></li>
                <li class="footer__menu-item"><a href="{{url('cloud-solutions')}}">Cloud Solutions</a></li>
                <li class="footer__menu-item"><a href="{{url('it-consulting')}}">IT Consulting</a></li>
              </ul>
            </div>
          </div>
          <div class="footer__accordian-item">
            <div class="footer__accordian-title">Know Us</div>
            <div class="footer__accordian-content">
              <ul class="footer__menu">
                <li class="footer__menu-item"><a href="https://yourvault.in/">Our Product</a></li>
                <li class="footer__menu-item"><a href="{{url('about-us')}}">About Us</a></li>
                <li class="footer__menu-item"><a href="{{url('our-work')}}">Work</a></li>
                <li class="footer__menu-item"><a href="{{url('careers')}}">Career</a></li>
              </ul>
            </div>
          </div>
          <div class="footer__accordian-item">
            <div class="footer__accordian-title">Contact</div>
            <div class="footer__accordian-content">
              <address class="footer__address">
                <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 0a8 8 0 0 0-8 8c0 7 7 12 8 12s8-5 8-12a8 8 0 0 0-8-8Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Z" fill="#646464"/>
                </svg>
                B/305, Everest Chambers, Marol Naka, Andheri East, Mumbai - 400059, India.
              </address>
              <div class="footer__phone"><svg width="16" height="16"  viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m15 11-4-2a1 1 0 0 0-1 0l-2 2-3-3 2-2a1 1 0 0 0 0-1L5 1a1 1 0 0 0-1-1 5 5 0 0 0-4 4c0 7 5 12 12 12a5 5 0 0 0 4-4 1 1 0 0 0-1-1Z" fill="#646464"/></svg><a href="tel:+918080425120">+91 9987157707</a></div>
              <div class="footer__email"><svg width="19" height="14"  viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 0H1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V1a1 1 0 0 0 0-1ZM7 7l-6 5V2l6 5Zm1 1 1 1a1 1 0 0 0 1 0l1-1 5 5H3l5-5Zm4-1 5-5v10l-5-5Z" fill="#646464"/></svg><a href="mailto:info@techsimians.com">info@techsimians.com</a></div>
            </div>
          </div>
          <div class="footer__accordian-item hide-on-desktop">
            <div class="footer__accordian-title">Legal</div>
            <div class="footer__accordian-content">
              <ul class="footer__menu">
                <li class="footer__menu-item"><a href="{{url('terms-of-service')}}">Terms of Service</a></li>
                <li class="footer__menu-item"><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="footer__legal-links hide-on-mobile" style="float:right;">
         <div class="footer__legal-links-menu" style="margin-bottom:-px;">
          <a href="{{url('terms-of-service')}}">Terms of Service</a> <a href="{{url('privacy-policy')}}" >Privacy Policy</a>

        </div>
        
      </div>
    
    </footer>
    <div class="footer__copyright hide-on-desktop">©<script>document.write(new Date().getFullYear())</script> Tech Simians. All Rights Reserved</div>
    <script>
    // Wait for the document to be ready
    document.addEventListener('DOMContentLoaded', function() {
        // Get the success message element
        const successMessage = document.getElementById('success-message');
        
        // Check if the success message exists
        if (successMessage) {
            // Hide the success message after 2 seconds
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000);
        }
    });
</script>


  <script>
  const fileInput = document.getElementById('file');
  const fileNameDisplay = document.getElementById('file-name');
  
  fileInput.addEventListener('change', function() {
    if (fileInput.files.length > 0) {
      const fileName = fileInput.files[0].name;
      fileNameDisplay.textContent = fileName;
    } else {
      fileNameDisplay.textContent = "No file selected";
    }
  });
</script>

<script>
  // Get the file input element
  const fileInput = document.getElementById('file');
  
  // Add an event listener to the file input to show the message
  fileInput.addEventListener('change', function () {
    const file = fileInput.files[0];
    
    // Check if a file is selected
    if (file) {
      const fileSizeInMB = file.size / (1024 * 1024);
      const maxWidth = 1000;
      const maxHeight = 1000;
      
      // Display the message with file size and dimensions restrictions
      alert(`Selected file: ${file.name}\nSize: ${fileSizeInMB.toFixed(2)} MB\nDimensions: ${maxWidth}x${maxHeight}`);
    }
  });
</script>

  <script>
  // Get all job title elements
  const jobTitles = document.querySelectorAll('.job-title');
  
  // Add event listener to each job title
  jobTitles.forEach((title) => {
    title.addEventListener('click', showSelectedJob);
  });
  
  function showSelectedJob(event) {
    // Hide all job content sections
      const jobContents = document.querySelectorAll('.job-content');
      jobContents.forEach((content) => {
        content.style.display = 'none';
      });
      
      // Show the selected job content
      const selectedJobId = event.target.getAttribute('data-job-id');
      const selectedJobContent = document.getElementById(selectedJobId);
      selectedJobContent.style.display = 'block';
    }
    </script>



<script>
  // Get the job description element
  var jobDescription = document.querySelector('.job-description .description-content');
  
  // Get the radio inputs for job tags
  var jobTagInputs = document.querySelectorAll('.job-tag-toggle__input');
  
  // Add event listeners to the job tag inputs
  jobTagInputs.forEach(function(input) {
    input.addEventListener('click', function() {
      var selectedValue = this.value;
      
      if (selectedValue === '[data-filter~=engineering]') {
        jobDescription.textContent = 'Engineering job description goes here.5';
      } else {
        jobDescription.textContent = ''; // Clear the job description if a different job tag is selected
      }
    });
  });
  
  // Get all job title elements
  const jobTitles = document.querySelectorAll('.job-title');
  
  // Add event listener to each job title
  jobTitles.forEach((title) => {
    title.addEventListener('click', showSelectedJob);
  });
  
  function showSelectedJob(event) {
    // Hide all job content sections
    const jobContents = document.querySelectorAll('.job-content');
    jobContents.forEach((content) => {
      content.style.display = 'none';
    });
    
    // Show the selected job content
    const selectedJobId = event.target.getAttribute('data-job-id');
    const selectedJobContent = document.getElementById(selectedJobId);
    selectedJobContent.style.display = 'block';
  }
  </script> 


<script>
    $(document).ready(function() {
      $('.card').addClass('card-animation');
    });
    </script>
  </script>


  <script>
  // JavaScript code for job filtering
document.addEventListener("DOMContentLoaded", function () {
  const filterRadioInputs = document.querySelectorAll(".job-tag-toggle__input");
  const jobContentSections = document.querySelectorAll(".job-content");

  function showAllJobDescriptions() {
    jobContentSections.forEach((section) => {
      section.style.display = "block";
    });
  }

  function hideAllJobDescriptions() {
    jobContentSections.forEach((section) => {
      section.style.display = "none";
    });
  }

  function showJobDescription(jobId) {
    jobContentSections.forEach((section) => {
      if (section.id === jobId) {
        section.style.display = "block";
      } else {
        section.style.display = "none";
      }
    });
  }

  // Handle filter radio button clicks
  filterRadioInputs.forEach((input) => {
    input.addEventListener("change", function () {
      const value = this.value;

      if (value === "[data-filter]") {
        showAllJobDescriptions();
      } else {
        hideAllJobDescriptions();
        showJobDescription(value);
      }
    });
  });

  // Show all job descriptions by default
  showAllJobDescriptions();
});

</script>

