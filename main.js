const typed = new Typed(".multiple-text", {
  strings: ["Frontend Developer", "UI/UX Designer"],
  typeSpeed: 100,
  backSpeed: 100,
  backDelay: 1000,
  loop: true,
  startDelay: 1700,
});

document.getElementById('download-cv').addEventListener('click', function() {
  const cvPath = 'CV/cv.pdf';
  const link = document.createElement('a');
  link.href = cvPath;
  link.download = 'cv.pdf';
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
});

window.addEventListener('scroll', function() {
  const aboutSection = document.querySelector('.about-me');
  const sectionPosition = aboutSection.getBoundingClientRect().top;
  const screenPosition = window.innerHeight / 1.3; // Adjust as needed

  if (sectionPosition < screenPosition) {
      aboutSection.classList.add('visible');
  }
});

