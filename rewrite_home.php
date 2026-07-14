<?php
$file = 'resources/views/home.blade.php';
$content = file_get_contents($file);

$replacements = [
    'LEADING &amp; TRUSTED iGAMING SOFTWARE DEVELOPMENT' => 'PREMIER iGAMING SOFTWARE DEVELOPMENT &amp; SOLUTIONS PROVIDER',
    'LEADING & TRUSTED iGAMING SOFTWARE DEVELOPMENT' => 'PREMIER iGAMING SOFTWARE DEVELOPMENT & SOLUTIONS PROVIDER',
    'Renowned for its IT services and unparalleled performance' => 'Recognized for engineering excellence and unparalleled platform performance',
    'BSL Gaming develops scalable and captivating software solutions' => 'BSL Gaming creates scalable, high-retention software solutions',
    'Adhering to the project requirements, we continually push the boundaries of creativity, delivering unforgettable entertainment experiences.' => 'We align closely with your strategic requirements, pushing technological boundaries to deliver immersive and profitable entertainment ecosystems.',
    'With a proven track record of success and excellence in iGaming' => 'Backed by a proven track record in the iGaming sector',
    'BSL Gaming remains the trusted choice for businesses, committed to delivering 100% client success.' => 'BSL Gaming is the trusted technology partner for forward-thinking operators.',
    'Additionally, our team of experts focuses on the client’s detailed requirements.' => 'Our seasoned experts dive deep into your operational requirements.',
    'Navigating step-by-step with project analysis, we develop iGaming solutions' => 'Utilizing rigorous project analysis, we architect custom iGaming platforms',
    'with enhanced user experience.' => 'that maximize user engagement and drive sustainable revenue.',
    'Specializing in sportsbook platform development services' => 'As a specialized leader in sportsbook platform development',
    'BSL Gaming stands as a one-stop solution in delivering turnkey sports betting software with comprehensive solutions to clients globally.' => 'BSL Gaming provides a comprehensive ecosystem for turnkey and custom sports betting software.',
    'With comprehensive custom betting software, we help clients reach globally.' => 'We empower global operators with robust, scalable architectures designed to capture market share and scale internationally.',
    'Uplift your business ROI by leveraging high-quality sports betting solutions with third-party' => 'Maximize your ROI with enterprise-grade sports betting solutions. We integrate premium third-party',
    'API integrations, robust features, &amp; modern tech-stack tailored to market needs.' => 'APIs, advanced risk management features, and a modern technology stack tailored specifically to your target demographic.',
    'With a team of experts who deeply understand player psychology, we develop intuitive sports betting' => 'Leveraging deep insights into player psychology and market trends, our expert engineers build highly intuitive sports betting',
    'and casino game development tailored for the success of our clients.' => 'and casino platforms calibrated for maximum player retention and operator profitability.',
    'Backed by years of experience &amp; a dedicated casino game development company' => 'Driven by decades of combined industry experience, our dedicated casino development studio',
    'we ensure smooth implementation and ongoing success for businesses.' => 'guarantees seamless deployment and long-term operational success.',
    'Focusing on reliability, we offer a comprehensive stack of casino gaming solutions tailored for the modern gaming vertical.' => 'We provide a highly reliable, full-stack casino gaming infrastructure engineered for the modern digital vertical.',
    'We’re your go-to for sportsbook integration.' => 'We are your definitive partner for seamless sportsbook integration.',
    'Our tailored approach caters to the unique requirements' => 'Our bespoke approach addresses your exact technical requirements',
    'of the clients, providing seamless betting exchange experiences &amp; maximizing engagement with robust betting integration features.' => 'delivering frictionless betting exchange experiences and amplifying user engagement through robust, scalable API integrations.',
    'Our team of expert app developers builds feature-rich mobile applications for sports betting, casino' => 'Our elite mobile development team engineers feature-rich, high-performance applications for sports betting, casino',
    'solutions, &amp; crash games tailored to unique requirements.' => 'suites, and crash games tailored to operator requirements.',
    'We are a trusted gaming App Development company offering seamless cross-platform experiences to users.' => 'As a trusted mobile partner, we deliver flawless cross-platform experiences that keep your players connected and engaged anywhere.',
    'We create captivating gaming solutions that foster community engagement &amp; interaction through Social' => 'We architect captivating social gaming ecosystems designed to exponentially increase community engagement. By seamlessly integrating social',
    'gaming platform development, integrating social features.' => 'features, we transform standard gameplay into a viral, community-driven experience.',
    'From eSports Platform development to customization, our gaming experts design dynamic platforms that' => 'From ground-up eSports platform development to bespoke module customization, our technical architects design dynamic, high-concurrency platforms that',
    'engage players with cutting-edge features and seamless performance.' => 'captivate audiences with cutting-edge streaming features and zero-latency performance.',
    'Our custom software development services are designed to address unique business needs, driving inno' => 'Our bespoke software development services are precision-engineered to solve complex operational challenges, driving innovation',
    'vation &amp; efficiency for our clients. Through a tailored approach, we build robust custom software that empowers organizations to achieve their goals.' => 'and scalable efficiency. Through our tailored methodology, we architect enterprise-grade solutions that empower gaming organizations to dominate their markets.',
    'BSL Gaming provides robust multi-currency support in iGaming software development to ensure seamless' => 'BSL Gaming integrates robust, globalized multi-currency and crypto-wallet support into every platform.',
    'and secure transactions for players worldwide, enhancing accessibility, user trust, and overall experience across diverse global markets.' => 'We ensure frictionless, bank-grade secure transactions for international players, significantly enhancing accessibility, trust, and global market penetration.',
    'We strive to provide Regular automated game updates in  iGaming platforms &amp; Casino Solutions to gua' => 'We deploy automated, zero-downtime update pipelines across all our iGaming platforms and Casino Solutions.',
    'rantee that players consistently enjoy seamless experiences, eliminating downtime &amp; enhancing satisfaction through the latest features.' => 'This ensures your players consistently enjoy uninterrupted, seamless experiences while instantly accessing the latest features and security patches.',
    'In iGaming software development, user experience for bets involves intuitive interfaces, seamless na' => 'In modern iGaming, user experience is paramount. We focus on hyper-intuitive betting interfaces, fluid',
    'vigation, and real-time updates. By prioritizing responsive design and clear information architectures, we ensure engaging &amp; satisfying interaction for players.' => 'navigation, and ultra-low latency real-time data updates. By prioritizing mobile-first responsive design, we guarantee an engaging, high-conversion environment for your players.',
    'We build robust, scalable architecture for seamless gameplay, enhanced user experience, and reliable' => 'Our platforms are built on robust, horizontally scalable architectures that guarantee zero-lag gameplay, exceptional user experiences, and reliable',
    'performance across various platforms &amp; devices.' => 'performance during peak traffic events across all devices.',
    'As a pioneer in the IT industry, we deliver iGaming solutions that are feature-rich, highly function' => 'As elite technologists in the iGaming sector, we engineer solutions that are aggressively feature-rich, highly performant',
    'al, and designed to exceed the evolving demands of the global market.' => 'and specifically designed to outpace the evolving technological demands of the global gaming market.'
];

foreach ($replacements as $old => $new) {
    // Escape standard regex characters but allow flexible whitespace
    $pattern = preg_quote($old, '/');
    $pattern = preg_replace('/\\\s\+/', '\s+', $pattern);
    $content = preg_replace('/' . $pattern . '/iu', $new, $content);
}

file_put_contents($file, $content);
echo "Rewrote home.blade.php content\n";
