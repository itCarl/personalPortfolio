let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);


FlexMasonry.init('.masonry', {
    responsive: true,

    breakpointCols: {
        'min-width: 1500px': 6,
        'min-width: 1200px': 5,
        'min-width: 992px': 4,
        'min-width: 768px': 3,
        'min-width: 576px': 2,
    },
    
    numCols: 5,
});

