AOS.init({
    duration: 1200, // Animation duration
    easing: 'ease-in-out', // Easing function
    once: true // Animation happens only once when the element is visible
});

const toggleButton = document.getElementById('darkModeToggle');
toggleButton.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
});

document.addEventListener('DOMContentLoaded', () => {
    const greetingElement = document.querySelector('.hero-content h2');
    const currentHour = new Date().getHours();
    
    let greetingMessage = "Welcome to Foodie's Paradise!";
    
    if (currentHour >= 6 && currentHour < 12) {
        greetingMessage = "Good Morning, Foodie!";
    } else if (currentHour >= 12 && currentHour < 18) {
        greetingMessage = "Good Afternoon, Food Lover!";
    } else {
        greetingMessage = "Good Evening, Welcome Back!";
    }

    greetingElement.textContent = greetingMessage;
});