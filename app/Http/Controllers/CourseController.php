<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    private function getCourseData()
    {
        return [
            'license-to-skill' => [
                'title' => 'License to Skill: Engineering in the Age of Artificial Intelligence',
                'location' => 'Aalborg, Denmark',
                'dates' => '26 Jul – 03 Aug 2026',
                'duration' => '8 days',
                'level' => 'Intermediate',
                'language' => 'English',
                'price' => '51 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=i4afz2h',
                'description' => 'Dive into the exciting world of AI and learn how modern engineering is being revolutionized by artificial intelligence. This course combines theoretical knowledge with hands-on projects to give you practical skills in AI implementation.',
                'learnings' => [
                    'Understand the fundamentals of AI and machine learning',
                    'Apply AI techniques to real-world engineering problems',
                    'Work with popular AI frameworks and tools',
                    'Collaborate on team projects with international students',
                    'Explore ethical considerations in AI development'
                ],
                'image' => 'https://images.unsplash.com/photo-1584699542196-92b1e6b0ea44?w=1200'
            ],
            'surf-ecological-wave' => [
                'title' => 'Surf on an ecological wave: Designing the next gen surf Board',
                'location' => 'Bordeaux, France',
                'dates' => '14 Jun – 21 Jun 2026',
                'duration' => '7 days',
                'level' => 'All levels',
                'language' => 'English',
                'price' => '42 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=m2mno9q',
                'description' => 'Combine passion for surfing with sustainable design! Learn to create eco-friendly surfboards using innovative materials and manufacturing processes that minimize environmental impact.',
                'learnings' => [
                    'Understand sustainable materials and their properties',
                    'Design principles for high-performance surfboards',
                    'CAD modeling and prototyping techniques',
                    'Life cycle assessment of products',
                    'Innovation in sports equipment design'
                ],
                'image' => 'https://images.unsplash.com/photo-1586987177718-54e088c798b6?w=1200'
            ],
            'data-science' => [
                'title' => 'Data Science: Turning Stranger Data the Rightside Up',
                'location' => 'Aveiro, Portugal',
                'dates' => '22 Jul – 29 Jul 2026',
                'duration' => '7 days',
                'level' => 'Beginner to Intermediate',
                'language' => 'English',
                'price' => '48 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=m2mno9n',
                'description' => 'Enter the Upside Down of data science! Learn to extract valuable insights from complex datasets, build predictive models, and make data-driven decisions that matter.',
                'learnings' => [
                    'Data cleaning and preprocessing techniques',
                    'Statistical analysis and visualization',
                    'Machine learning fundamentals',
                    'Python for data science',
                    'Real-world case studies and projects'
                ],
                'image' => 'https://images.unsplash.com/photo-1562564875-478697867200?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            'alchemy-startup' => [
                'title' => 'The Alchemy of Startup Creation: Turn Your Idea into Gold!',
                'location' => 'Belgrade, Serbia',
                'dates' => '08 Aug – 15 Aug 2026',
                'duration' => '7 days',
                'level' => 'All levels',
                'language' => 'English',
                'price' => '36 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=g59bx3h',
                'description' => 'Transform your innovative ideas into successful startups. Learn the essential ingredients of entrepreneurship, from ideation to pitching investors.',
                'learnings' => [
                    'Validate your business idea with market research',
                    'Build a minimum viable product (MVP)',
                    'Create compelling pitch decks',
                    'Understand startup funding and financing',
                    'Network with entrepreneurs and investors'
                ],
                'image' => 'https://images.unsplash.com/photo-1711970908551-6bb1f39377b5?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGJlbGdyYWRlfGVufDB8fDB8fHwy'
            ],
            'once-upon-model' => [
                'title' => 'Once Upon a Model: Bring Your Design Concepts to Life in Software',
                'location' => 'Bucharest, Romania',
                'dates' => '12 Jul – 21 Jul 2026',
                'duration' => '9 days',
                'level' => 'Intermediate',
                'language' => 'English',
                'price' => '48 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=m2mno9k',
                'description' => 'Bridge the gap between design and development. Learn software modeling techniques that transform creative concepts into functional applications.',
                'learnings' => [
                    'UML and software modeling fundamentals',
                    'Design patterns and best practices',
                    'Prototyping and wireframing tools',
                    'Agile development methodologies',
                    'Team collaboration in software projects'
                ],
                'image' => 'https://images.unsplash.com/photo-1730120257566-9f4b7f37f20d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8YnVjaGFyZXN0fGVufDB8fDB8fHwy'
            ],
            'agentic-ai' => [
                'title' => 'When Code Makes Decisions: A Gentle Introduction to Agentic AI',
                'location' => 'Chisinau, Moldova',
                'dates' => '21 Jul – 28 Jul 2026',
                'duration' => '7 days',
                'level' => 'Beginner',
                'language' => 'English',
                'price' => '48 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=k3ljman',
                'description' => 'Explore the fascinating world of autonomous AI agents that can make decisions and take actions independently. Perfect for beginners curious about AI.',
                'learnings' => [
                    'Introduction to autonomous agents',
                    'Decision-making algorithms',
                    'Reinforcement learning basics',
                    'Building simple AI agents',
                    'Ethics and safety in autonomous systems'
                ],
                'image' => 'https://images.unsplash.com/photo-1629045951387-6d86eb2aad3d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Y2hpc2luYXV8ZW58MHx8MHx8fDI%3D'
            ],
            'where-is-perry' => [
                'title' => 'Where is Perry? Bring your own Summer Invention to life!',
                'location' => 'Cluj-Napoca, Romania',
                'dates' => '27 Jul – 03 Aug 2026',
                'duration' => '7 days',
                'level' => 'All levels',
                'language' => 'English',
                'price' => '42 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=i4afz2d',
                'description' => 'Channel your inner inventor! Design, prototype, and build your own creative invention in this hands-on maker course.',
                'learnings' => [
                    'Creative problem-solving techniques',
                    'Rapid prototyping with Arduino and Raspberry Pi',
                    '3D printing and fabrication',
                    'Electronics and circuit design',
                    'Presenting your invention to others'
                ],
                'image' => 'https://images.unsplash.com/photo-1618826524225-439b385bb1c3?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Y2x1anxlbnwwfHwwfHx8Mg%3D%3D3D%3D'
            ],
            'space-safety' => [
                'title' => 'Space Safety: Your Guide to the Final Frontier',
                'location' => 'Coimbra, Portugal',
                'dates' => '15 Jul – 24 Jul 2026',
                'duration' => '9 days',
                'level' => 'Intermediate',
                'language' => 'English',
                'price' => '54 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=m2co30m',
                'description' => 'Learn about the critical safety systems and protocols that keep astronauts and spacecraft safe in the harsh environment of space.',
                'learnings' => [
                    'Space mission planning and risk assessment',
                    'Life support systems engineering',
                    'Radiation protection and mitigation',
                    'Emergency procedures in space',
                    'Space debris tracking and avoidance'
                ],
                'image' => 'https://images.unsplash.com/photo-1672995259409-f749336b646b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29pbWJyYXxlbnwwfHwwfHx8Mg%3D%3D'
            ],
            'wolf-digital-street' => [
                'title' => 'The Wolf of Digital Street: Sell Me This Product!',
                'location' => 'Istanbul, Türkiye',
                'dates' => '17 Jun – 24 Jun 2026',
                'duration' => '7 days',
                'level' => 'All levels',
                'language' => 'English',
                'price' => '48 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=k3bk11q',
                'description' => 'Master the art of digital sales and marketing. Learn persuasive techniques, conversion optimization, and how to sell products online effectively.',
                'learnings' => [
                    'Digital sales strategies and tactics',
                    'Conversion rate optimization',
                    'Social selling techniques',
                    'E-commerce fundamentals',
                    'Persuasive communication skills'
                ],
                'image' => 'https://images.unsplash.com/photo-1626956291772-3aa243614fd0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aXN0YW5idWx8ZW58MHx8MHx8fDI%3D'
            ],
            'paradise-marketing' => [
                'title' => 'Paradise on Marketing: Where Brands Catch Waves',
                'location' => 'Istanbul, Türkiye',
                'dates' => '04 Jul – 12 Jul 2026',
                'duration' => '8 days',
                'level' => 'All levels',
                'language' => 'English',
                'price' => '48 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=k3ljmah',
                'description' => 'Ride the wave of modern marketing! Explore brand building, content marketing, and social media strategies in this comprehensive course.',
                'learnings' => [
                    'Brand identity development',
                    'Content marketing strategies',
                    'Social media campaign planning',
                    'Influencer marketing',
                    'Marketing analytics and ROI measurement'
                ],
                'image' => 'https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aXN0YW5idWx8ZW58MHx8MHx8fDI%3D'
            ],
            'lord-of-things' => [
                'title' => 'Lord of the Things: Create your own smart household with IoT!',
                'location' => 'Kosice, Slovakia',
                'dates' => '05 Jul – 12 Jul 2026',
                'duration' => '7 days',
                'level' => 'Intermediate',
                'language' => 'English',
                'price' => '39 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=i4afz2n',
                'description' => 'Build your own smart home ecosystem! Learn to connect devices, sensors, and actuators to create an intelligent living space.',
                'learnings' => [
                    'IoT architecture and protocols',
                    'Sensor integration and data collection',
                    'Home automation systems',
                    'Cloud connectivity and data storage',
                    'Security in IoT applications'
                ],
                'image' => 'https://images.unsplash.com/photo-1573924038839-3d9099ffd189?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8a29zaWNlfGVufDB8fDB8fHwy'
            ],
            'double-trouble' => [
                'title' => 'Double Trouble: When Physical Systems Go Digital',
                'location' => 'Leuven, Belgium',
                'dates' => '07 Jul – 16 Jul 2026',
                'duration' => '9 days',
                'level' => 'All levels',
                'language' => 'English',
                'price' => '60 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=k3bk11n',
                'description' => 'Explore digital twin technology - creating virtual replicas of physical systems for simulation, monitoring, and optimization.',
                'learnings' => [
                    'Digital twin concepts and applications',
                    'Simulation and modeling techniques',
                    'Real-time data synchronization',
                    'Predictive maintenance systems',
                    'Industry 4.0 technologies'
                ],
                'image' => 'https://images.unsplash.com/photo-1559592073-fb80a3fe112b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bGV1dmVufGVufDB8fDB8fHwy'
            ],
            'cold-cases-genome' => [
                'title' => 'Solving Cold Cases in the Genome: Mystery of Gene and Cell Therapies',
                'location' => 'Ljubljana, Slovenia',
                'dates' => '24 Aug – 31 Aug 2026',
                'duration' => '7 days',
                'level' => 'All levels',
                'language' => 'English',
                'price' => '48 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=m2co30y',
                'description' => 'Unravel the mysteries of gene therapy and cellular medicine. Learn cutting-edge biotechnology techniques that are revolutionizing healthcare.',
                'learnings' => [
                    'Fundamentals of gene therapy',
                    'CRISPR and gene editing technologies',
                    'Cell therapy applications',
                    'Bioethics in genetic medicine',
                    'Future trends in personalized medicine'
                ],
                'image' => 'https://images.unsplash.com/photo-1599925355837-81173932705d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bGp1YmxqYW5hfGVufDB8fDB8fHwy'
            ],
            'machine-design' => [
                'title' => 'Giving shape to the unknown: Machine Design and Rapid Prototyping',
                'location' => 'Louvain-la-Neuve, Belgium',
                'dates' => '03 Jul – 11 Jul 2026',
                'duration' => '8 days',
                'level' => 'Intermediate',
                'language' => 'English',
                'price' => '51 EUR',
                'apply_url' => 'https://www.best.eu.org/courses/welcome.jsp',
                'description' => 'Transform your ideas into physical prototypes. Master CAD design and rapid prototyping techniques to bring your mechanical designs to life.',
                'learnings' => [
                    'Advanced CAD modeling techniques',
                    'Additive manufacturing processes',
                    'Material selection for prototyping',
                    'Design for manufacturability',
                    'Testing and iteration methods'
                ],
                'image' => 'https://images.unsplash.com/photo-1693723989569-1d4ca7bc427a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGJlbGdpdW0lMjBob3VzZXN8ZW58MHx8MHx8fDI%3D'
            ],
            'avatar-way-ai' => [
                'title' => 'Avatar: The Way of AI',
                'location' => 'Madrid, Spain',
                'dates' => '18 Jul – 27 Jul 2026',
                'duration' => '9 days',
                'level' => 'Intermediate',
                'language' => 'English',
                'price' => '42 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=i4afz26',
                'description' => 'Journey into the world of AI-powered avatars and virtual beings. Learn to create intelligent digital characters and conversational agents.',
                'learnings' => [
                    'Natural language processing basics',
                    'Chatbot development',
                    'Virtual character animation',
                    'Emotion recognition and synthesis',
                    'Applications in gaming and virtual reality'
                ],
                'image' => 'https://images.unsplash.com/photo-1539037116277-4db20889f2d4?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bWFkcmlkfGVufDB8fDB8fHwy'
            ],
            'pax-informatica' => [
                'title' => 'Pax Informatica: Advanced usage of Generative AI and LLMs',
                'location' => 'Maribor, Slovenia',
                'dates' => '27 Jun – 04 Jul 2026',
                'duration' => '7 days',
                'level' => 'All levels',
                'language' => 'English',
                'price' => '48 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=k3ljmak',
                'description' => 'Master the cutting edge of AI technology. Deep dive into large language models, prompt engineering, and advanced generative AI applications.',
                'learnings' => [
                    'Large language model architectures',
                    'Advanced prompt engineering techniques',
                    'Fine-tuning and customization',
                    'Building AI-powered applications',
                    'Responsible AI development'
                ],
                'image' => 'https://images.unsplash.com/photo-1663507879157-3a52effee31d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bWFyaWJvcnxlbnwwfHwwfHx8Mg%3D%3D'
            ],
            'tron-autonomous' => [
                'title' => 'TRON: The Rise of Autonomous Vehicles',
                'location' => 'Messina, Italy',
                'dates' => '26 Jul – 02 Aug 2026',
                'duration' => '7 days',
                'level' => 'Beginner to Intermediate',
                'language' => 'English',
                'price' => '30 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=k3bk11j',
                'description' => 'Enter the grid of autonomous vehicle technology. Learn about self-driving systems, sensors, and the future of transportation.',
                'learnings' => [
                    'Autonomous vehicle architecture',
                    'Computer vision for self-driving',
                    'Sensor fusion techniques',
                    'Path planning and decision making',
                    'Safety and regulatory considerations'
                ],
                'image' => 'https://images.unsplash.com/photo-1586632713405-c87f340e41ae?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            'attention-economy' => [
                'title' => 'Attention Economy: How Brands Win Minds',
                'location' => 'Mostar, Bosnia and Herzegovina',
                'dates' => '26 Jul – 01 Aug 2026',
                'duration' => '6 days',
                'level' => 'All levels',
                'language' => 'English',
                'price' => '42 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=m2co30g',
                'description' => 'Understand the psychology behind capturing and maintaining audience attention in the digital age. Learn strategies that top brands use.',
                'learnings' => [
                    'Psychology of attention and engagement',
                    'Content strategies for digital platforms',
                    'Attention metrics and analytics',
                    'Behavioral economics in marketing',
                    'Creating viral content'
                ],
                'image' => 'https://images.unsplash.com/photo-1544329095-a7c19df83018?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bW9zdGFyfGVufDB8fDB8fHww'
            ],
            'journal-4' => [
                'title' => 'Journal 4: Clean energy, New technologies & suSTANable buildings',
                'location' => 'Patras, Greece',
                'dates' => '05 Jul – 13 Jul 2026',
                'duration' => '8 days',
                'level' => 'Intermediate',
                'language' => 'English',
                'price' => '43 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=i4afz2p',
                'description' => 'Explore sustainable architecture and green building technologies. Learn to design energy-efficient buildings for a sustainable future.',
                'learnings' => [
                    'Renewable energy systems for buildings',
                    'Sustainable construction materials',
                    'Energy efficiency optimization',
                    'Green building certifications',
                    'Smart building technologies'
                ],
                'image' => 'https://images.unsplash.com/photo-1653493170362-3de608673854?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cGF0cmFzfGVufDB8fDB8fHww'
            ],
            'copilot-speaking' => [
                'title' => 'This is your Copilot Speaking: AI-Powered Future of Education',
                'location' => 'Porto, Portugal',
                'dates' => '19 Jul – 28 Jul 2026',
                'duration' => '9 days',
                'level' => 'All levels',
                'language' => 'English',
                'price' => '48 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=m2co30q',
                'description' => 'Discover how AI is transforming education. Learn to leverage AI tools for personalized learning and educational innovation.',
                'learnings' => [
                    'AI in educational technology',
                    'Personalized learning systems',
                    'Educational AI tools and platforms',
                    'Learning analytics',
                    'Future trends in education'
                ],
                'image' => 'https://images.unsplash.com/photo-1577958194277-7b3bc213b03c?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cG9ydG98ZW58MHx8MHx8fDA%3D'
            ],
            'hash-blockchain' => [
                'title' => 'Hash me if you can: Blockchain most wanted',
                'location' => 'Prague, Czech Republic',
                'dates' => '14 Aug – 23 Aug 2026',
                'duration' => '9 days',
                'level' => 'Intermediate',
                'language' => 'English',
                'price' => '48 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=k3bk11v',
                'description' => 'Crack the code of blockchain technology. From cryptocurrencies to smart contracts, understand the technology reshaping finance and beyond.',
                'learnings' => [
                    'Blockchain fundamentals and architecture',
                    'Cryptocurrency and tokenomics',
                    'Smart contract development',
                    'Decentralized applications (DApps)',
                    'Blockchain security and consensus'
                ],
                'image' => 'https://images.unsplash.com/photo-1629044562928-6946d8d3feea?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8cHJhZ3VlfGVufDB8fDB8fHww'
            ],
            'empowered-diversity' => [
                'title' => 'Empowered Diversity: International Mobility, Wellbeing, and Inclusive Campus Culture',
                'location' => 'Iasi, Romania',
                'dates' => '11 Aug – 19 Aug 2026',
                'duration' => '8 days',
                'level' => 'Beginner to Intermediate',
                'language' => 'English',
                'price' => '48 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=g59bx2x',
                'description' => 'Explore how universities can foster inclusive environments that support international mobility and student wellbeing. Gain insights into diversity strategies, cross-cultural collaboration, and building supportive campus communities.',
                'learnings' => [
                    'Inclusive campus strategies',
                    'Student wellbeing frameworks',
                    'International mobility programs',
                    'Cross-cultural communication',
                    'Diversity policy implementation'
                ],
                'image' => 'https://images.unsplash.com/photo-1699359104149-8a959a1c348c?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8aWFzaXxlbnwwfHwwfHx8MA%3D%3D'
            ],
            'fly-to-moon' => [
                'title' => 'Fly Me To The Moon: Engineering The BEST Space Supply Chain',
                'location' => 'Rome Tor Vergata, Italy',
                'dates' => '26 Jul – 01 Aug 2026',
                'duration' => '6 days',
                'level' => 'Intermediate',
                'language' => 'English',
                'price' => '42 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=k3bk11s',
                'description' => 'Learn the logistics of space exploration. Understand supply chain challenges for missions to the Moon, Mars, and beyond.',
                'learnings' => [
                    'Space mission logistics',
                    'Resource management in space',
                    'In-situ resource utilization',
                    'Supply chain optimization',
                    'Future of space colonization'
                ],
                'image' => 'https://images.unsplash.com/photo-1683319429394-84843ba18dea?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8cm9tZSUyMHRvciUyMHZlcmdhdGF8ZW58MHx8MHx8fDA%3D'
            ],
            'digital-experiences' => [
                'title' => 'Designing Digital Experiences: Why Some Apps Feel Amazing',
                'location' => 'Skopje, North Macedonia',
                'dates' => '05 Jul – 13 Jul 2026',
                'duration' => '8 days',
                'level' => 'All levels',
                'language' => 'English',
                'price' => '40 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=k3bk11g',
                'description' => 'Master the art of UX/UI design. Learn what makes digital products intuitive, engaging, and delightful to use.',
                'learnings' => [
                    'User research and personas',
                    'Information architecture',
                    'Interaction design principles',
                    'Prototyping and user testing',
                    'Design systems and accessibility'
                ],
                'image' => 'https://images.unsplash.com/photo-1692266338888-1379530db8fa?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHNrb3BqZXxlbnwwfHwwfHx8MA%3D%3D'
            ],
            'think-cfo' => [
                'title' => 'Think Like a CFO, Act Like a Leader',
                'location' => 'Tallinn, Estonia',
                'dates' => '28 Jun – 08 Jul 2026',
                'duration' => '10 days',
                'level' => 'Beginner to Intermediate',
                'language' => 'English',
                'price' => '45 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=o1nrq8q',
                'description' => 'Develop financial acumen and leadership skills. Learn to make strategic financial decisions and lead with confidence.',
                'learnings' => [
                    'Financial statement analysis',
                    'Strategic financial planning',
                    'Investment decision making',
                    'Risk management',
                    'Leadership and communication skills'
                ],
                'image' => 'https://images.unsplash.com/photo-1518975513267-071132b42e06?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8dGFsbGlufGVufDB8fDB8fHww'
            ],
            'gru-guide' => [
                'title' => "Gru's Guide for Minion Space Engineering",
                'location' => 'Vienna, Austria',
                'dates' => '11 Jul – 19 Jul 2026',
                'duration' => '8 days',
                'level' => 'All levels',
                'language' => 'English',
                'price' => '45 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=k3bk11k',
                'description' => 'A fun, hands-on approach to space engineering! Build and test miniature spacecraft systems while learning real aerospace principles.',
                'learnings' => [
                    'Spacecraft systems engineering',
                    'Miniature satellite design',
                    'Orbital mechanics basics',
                    'Testing and quality assurance',
                    'Teamwork in space projects'
                ],
                'image' => 'https://images.unsplash.com/photo-1573599852326-2d4da0bbe613?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8dmllbm5hfGVufDB8fDB8fHww'
            ],
            'racing-hackers' => [
                'title' => 'Racing against hackers: Advanced Cybersecurity for IoT',
                'location' => 'Wroclaw, Poland',
                'dates' => '14 Jul – 22 Jul 2026',
                'duration' => '8 days',
                'level' => 'Beginner',
                'language' => 'English',
                'price' => '48 EUR',
                'apply_url' => 'https://www.best.eu.org/event/details.jsp?activity=i4afz2k',
                'description' => 'Stay ahead of cyber threats in the IoT world. Learn advanced security techniques to protect connected devices and networks.',
                'learnings' => [
                    'IoT security vulnerabilities',
                    'Network security and encryption',
                    'Penetration testing for IoT',
                    'Secure firmware development',
                    'Incident response and mitigation'
                ],
                'image' => 'https://images.unsplash.com/photo-1563177978-4c5ffc081b2a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8d3JvY2xhd3xlbnwwfHwwfHx8MA%3D%3D'
            ],
        ];
    }

    public function index()
    {
        $courses = $this->getCourseData();
        return view('index', ['courses' => $courses]);
    }

    public function show($slug)
    {
        $courses = $this->getCourseData();
        
        if (!isset($courses[$slug])) {
            abort(404);
        }
        
        $courseData = $courses[$slug];
        
        return view('course-detail', ['courseData' => $courseData]);
    }
}