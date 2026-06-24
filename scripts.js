function redirectToGitHub(projectId) {
    switch (projectId) {
        case 'portfolio':
            window.open('https://github.com/2BytZ/Portfolio-og-Visitkort', '_blank');
            break;
        case 'summerbird':
            window.open('https://github.com/2BytZ/Summerbird-Portfolio-side', '_blank');
            break;
        default:
            window.open('https://github.com/2BytZ', '_blank');
            break;
    }
}