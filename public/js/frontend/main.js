// Wait for the DOM to load

document.addEventListener("DOMContentLoaded", () => {

  // Function to animate the counting
  function animateCount(element, targetNumber, duration) {
    let startNumber = 0;
    const increment = targetNumber / (duration / 10);
    const interval = setInterval(() => {
      startNumber += increment;
      if (startNumber >= targetNumber) {
        element.textContent = targetNumber; // Ensure it stops exactly at the target number
        clearInterval(interval);
      } else {
        element.textContent = Math.floor(startNumber);
      }
    }, 10);
  }

  // Use IntersectionObserver to trigger counting when the section is in view
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const counters = document.querySelectorAll("#counter .counter");
          counters.forEach((counter) => {
            const targetNumber = parseInt(counter.textContent, 10); // Get the target number from the HTML
            counter.textContent = "0"; // Reset to 0 before animating
            animateCount(counter, targetNumber, 2000); // Animate for 2 seconds
          });
          observer.disconnect(); // Stop observing once animation is triggered
        }
      });
    },
    { threshold: 0.5 } // Trigger when 50% of the section is visible
  );

  const counterSection = document.querySelector("#counter");
  if (counterSection) {
    observer.observe(counterSection);
  }
});
