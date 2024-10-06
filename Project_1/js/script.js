var user = 'Samantha';
var salutation = 'Hello, ';
var greeting = salutation + user + '! Here are the latest features:';

// Inject greeting into the DOM
var greetingEL = document.getElementById('greeting');
greetingEL.textContent = greeting;

// Features data
var features = [
    { name: "User Profiles", description: "Create and manage child profiles." },
    { name: "Educational Games", description: "Fun games to enhance learning." },
    { name: "Learning Resources", description: "Interactive lessons and tutorials." },
    { name: "Parent Dashboard", description: "Monitor progress and set goals." }
];

// Inject features into the DOM
var featureList = document.getElementById('dynamic-feature-list');
featureList.innerHTML = features.map(feature => 
    `<li class="feature-item"><strong>${feature.name}</strong>: ${feature.description}</li>`
).join('');