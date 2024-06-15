function filterContent(category) {
    // Check if the button is already active
    const isActive = document.getElementById(category + 'Btn').classList.contains('active');

    // Hide all content
    document.getElementById('sosmed-content').style.display = 'none';
    document.getElementById('donation-content').style.display = 'none';
    document.getElementById('email-content').style.display = 'none';

    // Remove 'active' class from all buttons
    document.getElementById('allBtn').classList.remove('active');
    document.getElementById('sosmedBtn').classList.remove('active');
    document.getElementById('donationBtn').classList.remove('active');
    document.getElementById('emailBtn').classList.remove('active');

    // If the button is already active, hide the content and return
    if (isActive) {
        return;
    }

    // Show content based on category
    if (category === 'all') {
        // Show all content
        document.getElementById('sosmed-content').style.display = 'block';
        document.getElementById('donation-content').style.display = 'block';
        document.getElementById('email-content').style.display = 'block';
        // Add 'active' class to the "All" button
        document.getElementById('allBtn').classList.add('active');
    } else {
        // Show specific content
        document.getElementById(category + '-content').style.display = 'block';
        // Add 'active' class to the clicked button
        document.getElementById(category + 'Btn').classList.add('active');
    }
}