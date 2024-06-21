<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
use Faker\Factory as Faker;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $products = [
            [
                'name' => "Laptop Pro Elite | 15.6 Quad-HD Display with Intel Core i9 | AI-Enhanced Graphics ",
                'description' => join("\n\n", ["The Laptop Pro offers a seamless blend of power and elegance, 
                    designed for professionals who demand performance without compromise. 
                    Under its sleek, anodized aluminum chassis lies a formidable 11th Gen Intel® Core™ processor, 
                    delivering breakneck speeds and unparalleled multitasking capabilities. 
                    Whether you're rendering complex 3D models, compiling vast codebases, 
                    or editing high-resolution videos, the Laptop Pro handles it all with ease, 
                    courtesy of its advanced thermal management system that keeps everything running cool and quiet.",

                    "With its stunning 16-inch Retina display, 
                    the Laptop Pro brings visuals to life with over 16 million colors and crisp, sharp details. 
                    The screen's P3 wide color gamut and True Tone technology ensure accurate, natural colors, 
                    making it a perfect match for graphic designers and photographers alike. 
                    The immersive sound from its high-fidelity six-speaker system with force-cancelling 
                    woofers envelops you in a cinematic audio experience, 
                    complementing the visual prowess to create a truly engaging user experience.",
                    
                    "Productivity is further enhanced by the Laptop Pro's Magic Keyboard, 
                    which features a refined scissor mechanism with 1mm travel for a responsive, 
                    comfortable, and quiet typing experience. 
                    The expansive Force Touch trackpad offers plenty of room to gesture and click, 
                    while the all-day battery life ensures you stay productive even when you're away from an outlet. 
                    Coupled with ultra-fast SSD storage, a plethora of ports for connectivity, and secure Touch ID, 
                    the Laptop Pro is not just a device—it's your indispensable partner in conquering the 
                    challenges of a high-paced professional landscape."
                ]),
                'price' => 1200.99,
                'stock' => 15,
                'category_id' => 1
            ],
            [
                'name' => "iPhone X Infinity - 64GB with Super Retina Display & Advanced Face ID ",
                'description' => join("\n\n", ["The iPhone X stands as a landmark in smartphone design, 
                    merging the classic allure of Apple's aesthetic with forward-thinking technology. 
                    Its edge-to-edge 5.8-inch Super Retina display is a feast for the eyes, 
                    boasting OLED technology that renders blacks truly black and colors vibrant. 
                    The screen harmoniously melds into the surgical-grade stainless steel frame, 
                    giving the device a singularly sleek look that's both iconic and unmistakably Apple. 
                    This iPhone X is engineered to resist water and dust, 
                    making it a resilient companion for all of life’s unexpected moments.",

                    "Photography with the iPhone X takes a leap into the realm of professional-grade imagery. 
                    The dual-camera system, equipped with both a wide and telephoto lens, 
                    enables stunning portraits with a depth-of-field effect that puts the focus on the subject. 
                    With advanced optical image stabilization and 4K video capabilities, 
                    it captures moments with clarity that rivals dedicated cameras. 
                    The TrueDepth front camera enables expressive selfies and ushers in the era of Face ID, 
                    which uses sophisticated facial recognition to unlock the phone, 
                    authenticate payments, and personalize your Animojis.",
                    
                    "At the heart of the iPhone X lies the A11 Bionic chip, 
                    a marvel of engineering that executes billions of operations per second. 
                    Its neural engine lays the groundwork for powerful machine learning applications 
                    and augmented reality experiences that react to the world around you in real time. 
                    Wireless charging eliminates the clutter of cables, and iOS provides a smooth, 
                    intuitive interface that's both familiar and fresh, with a focus on gesture navigation 
                    that heralds the beginning of a new chapter for iPhone. 
                    The iPhone X isn't just a cutting-edge smartphone; 
                    it's an invitation to reshape your understanding of what a phone can do."
                ]),
                'price' => 999.99,
                'stock' => 25,
                'category_id' => 1
            ],
            [
                'name' => "SoundWave Pro Bluetooth Headphones with Noise-Cancellation and Extended Bass",
                'description' => join("\n\n", ["Step into a personal audio oasis with our state-of-the-art Bluetooth headphones, 
                    designed to deliver an immersive sound experience. With high-fidelity audio quality, 
                    these headphones produce a rich, balanced sound that brings your favorite tracks to life. 
                    The advanced noise-cancellation technology allows you to enjoy your music uninterrupted, 
                    drowning out the clamor of the outside world with a sophisticated acoustic seal.",

                    "Crafted for comfort, these headphones feature plush, 
                    memory foam ear cushions that gently encase your ears, 
                    providing an all-day listening experience without fatigue. 
                    The lightweight, foldable design makes them an ideal travel companion, 
                    easily stowing away in your bag for on-the-go audio. With a long-lasting battery, 
                    enjoy extended playtimes of up to 20 hours on a single charge, 
                    ensuring your day is filled with the soundtrack of your choosing.",
                    
                    "These Bluetooth headphones are more than just a means to listen to music; 
                    they're a smart device enhancer. Integrated microphones offer crystal-clear call quality, 
                    and voice assistant compatibility means you can send commands to your smartphone hands-free. 
                    Whether it’s answering calls, skipping tracks, or adjusting volume, 
                    intuitive on-ear controls make it a breeze. 
                    Pair them effortlessly with your device and step into a world 
                    where superior sound meets unmatched convenience."
                ]),
                'price' => 250.50,
                'stock' => 40,
                'category_id' => 1
            ],
            [
                'name' => "Trailblazer Sprint - High-Performance Running Shoes with Adaptive Cushioning",
                'description' => join("\n\n", ["Elevate your running game with our premium running shoes, 
                    engineered to offer unmatched support and performance on any terrain. 
                    These shoes are the epitome of the perfect synergy between comfort and durability,
                    designed specifically for runners who demand excellence from their gear. 
                    The state-of-the-art cushioning system absorbs impact and propels you forward, 
                    turning each step into a smooth stride, while the adaptive fit technology ensures a snug, 
                    secure feel without restricting movement.",

                    "The breathable, lightweight mesh upper keeps your feet cool and comfortable, 
                    even during the most intense runs, and the reinforced outsoles offer 
                    superior traction to keep you grounded, rain or shine. 
                    These running shoes feature reflective elements that enhance visibility in low-light conditions, 
                    providing an extra layer of safety for evening or early morning training sessions.",
                    
                    "Our running shoes aren't just about peak performance; they're also about style. 
                    With a sleek, aerodynamic design and a variety of vibrant colors to choose from, 
                    they make a statement as bold as your ambitions. The antimicrobial lining wards off odor, 
                    ensuring your shoes stay fresh, no matter how far you push the limits.",
                    
                    "Whether you're gearing up for a marathon or just going for a casual jog, 
                    these running shoes are your ideal partner. They adapt to your unique foot shape and running style, 
                    offering support exactly where you need it. 
                    With our running shoes, you're not just prepared for the next race; 
                    you're ready to lead the pack."
                ]),
                'price' => 85.99,
                'stock' => 50,
                'category_id' => 2
            ],
            [
                'name' => "Serenity Grip Yoga Mat - Eco-Friendly Material with Alignment Markers",
                'description' => join("\n\n", ["Discover the perfect foundation for your yoga practice with our high-performance 
                    yoga mat. Crafted for both novices and seasoned yogis, 
                    our mat provides the ultimate balance of cushioning and grip. 
                    Experience the soft, supportive embrace that protects your joints during intense sessions or 
                    when holding poses for extended periods. The dense, non-slip surface offers stability, 
                    ensuring your hands and feet stay firmly in place, 
                    whether you’re in downward dog or mid-flow through a challenging vinyasa sequence.",

                    "Our yoga mat is eco-friendly and sustainably sourced, reflecting your commitment to the environment. 
                    It's hypoallergenic and free from harmful chemicals, 
                    designed for those who approach their practice with health and mindfulness at the forefront. 
                    The mat features closed-cell technology that repels sweat and bacteria, 
                    ensuring it remains odor-free and easy to clean, session after session.",
                    
                    "Its lightweight composition doesn’t compromise on durability. 
                    The resilient material resists tearing and stretching, 
                    standing up to the rigors of daily practice. 
                    With a variety of textures and colors inspired by the natural world, 
                    our yoga mat is as much a statement of personal style as it is a tool for wellness. 
                    It rolls up effortlessly for transport, with a smooth surface that feels as good as it looks.",
                    
                    "Unroll our yoga mat, and step onto a platform for exploration, 
                    where every asana is an opportunity for growth. Whether you’re meditating, 
                    stretching, or pushing your body’s limits, our mat is your silent partner, 
                    the silent ground beneath your feet, supporting every breath and movement."
                ]),
                'price' => 47.99,
                'stock' => 30,
                'category_id' => 2
            ],
            [
                'name' => "AceMaster Tournament Tennis Racket with Precision Control and Swift Swing",
                'description' => join("\n\n", ["Elevate your game with the latest innovation in tennis technology. 
                    Our state-of-the-art tennis racket is engineered for precision, power, and agility. 
                    Crafted from premium graphite, it offers a remarkable balance of strength and lightness, 
                    enabling you to deliver swift, forceful swings and serve with unparalleled speed. 
                    The aerodynamic frame slices through the air with minimal resistance, 
                    allowing for quick volleys and responsive returns.",

                    "The racket features a revolutionary string pattern designed to optimize ball control and spin, 
                    giving you the upper hand in every match. 
                    Whether you're aiming for a deep baseline shot or a delicate drop shot, 
                    the tension stability ensures consistent performance throughout your play. 
                    The racket's vibration dampening system absorbs shocks and reduces strain on your arm, 
                    providing comfort that lasts through prolonged rallies and intense practice sessions.",
                    
                    "With its sleek design and ergonomic grip, the racket feels like an extension of your arm. 
                    The enhanced grip texture prevents slipping, 
                    ensuring your hand stays firmly in place even as the intensity of the game rises.
                    The racket’s signature design is not only visually striking but also symbolizes a fusion of 
                    tradition and innovation in the sport of tennis.",
                    
                    "Our tennis racket comes in a variety of weights and grip sizes to cater to players of 
                    all levels and styles. It is the choice of professionals and aspiring athletes alike, 
                    favored for its adaptability and superior on-court performance. 
                    Whether you’re stepping onto the court for the first time or preparing for a championship, 
                    this racket is your ally for every serve, every point, every game."
                ]),
                'price' => 199.99,
                'stock' => 20,
                'category_id' => 2
            ],
            [
                'name' => "Harry Potter Collection",
                'description' => join("\n\n", ["Embark on a magical journey with the Harry Potter Collection, 
                    a compendium of the spellbinding series written by J.K. Rowling that has enchanted readers of 
                    all ages worldwide. This exquisite boxed set brings together all seven volumes, 
                    each a chapter in the life of the boy wizard Harry Potter and his adventures at 
                    Hogwarts School of Witchcraft and Wizardry.",

                    "From the moment Harry receives his letter from Hogwarts in \"The Philosopher's Stone\" to the epic finale 
                    of \"The Deathly Hallows,\" this collection is a gateway to a world where imagination knows no bounds. 
                    Each book is a doorway into a meticulously crafted universe brimming with rich detail, 
                    complex characters, and a narrative that weaves together themes of friendship, courage, 
                    and the struggle against the darkness.",
                    
                    "The Harry Potter books are more than just stories; they are vessels of wonder that have sparked a love 
                    for reading in countless individuals. These tomes contain the trials and triumphs of Harry and his 
                    friends as they confront evil, grow up, and face the complexities of life and death. 
                    Rowling's masterful storytelling brings forth a myriad of emotions, from the warmth of shared 
                    laughter at the Weasley's table to the heart-wrenching pain of loss.",
                    
                    "With beautifully designed covers and premium printing, the Harry Potter Collection is not only a 
                    collector's treasure but also the perfect gift for anyone embarking on their first or fiftieth 
                    reading of this beloved series. It promises a timeless experience of getting lost in a world where 
                    magic is real, and every turn of the page guarantees a new thrill, a new revelation, or a new friend.",
                    
                    "Whether you're buying it for yourself or as a gift, the Harry Potter Collection is a testament to the 
                    power of storytelling and the enduring magic of these classic tales that 
                    will continue to speak to generations to come."
                ]),
                'price' => 15.99,
                'stock' => 80,
                'category_id' => 3
            ],
            [
                'name' => "Cooking Pan",
                'description' => join("\n\n",["Unlock the secrets of gourmet chefs with our premium Cooking Pan, 
                    designed to elevate your culinary experiences. 
                    This pan is a staple for both professional kitchens and home cooks who crave the perfect balance of 
                    functionality and style. Crafted from superior materials, this pan offers unmatched heat distribution and 
                    retention for consistent, even cooking.

                    The Cooking Pan features a non-stick surface, allowing you to cook with minimal oil and ensuring an 
                    easy release of food, making clean-up a breeze. Whether you're searing steaks, sautéing vegetables, 
                    or creating delicate omelets, this pan performs with excellence. The ergonomic handle is designed to 
                    stay cool, providing a safe, comfortable grip.
                    
                    Versatility is at the heart of this pan's design. Compatible with all cooktops, 
                    including induction, and oven-safe, it allows you to start a dish on the stove and finish it in the oven.
                    Its durability is unmatched, resisting scratches and maintaining its sleek appearance over time.
                    
                    This Cooking Pan isn't just a tool; it's an investment in your culinary adventures. 
                    It's a companion for those who find joy in crafting delicious meals and a testament to the 
                    belief that the best dishes begin with the best cookware. With this pan in your kitchen arsenal, 
                    you're well-equipped to create a myriad of dishes that will impress your guests and 
                    satisfy your appetite for quality cooking.",
                ]),
                'price' => 35.99,
                'stock' => 60,
                'category_id' => 4
            ],
            // Next 3 Sections are for Category Gardening and should fall under Gardening Essentials Categories
            // Next three are watering equipment - Add Category "Lawn & Garden Watering Equipment"
            [
                'name' => "Garden Hose",
                'description' => join("\n\n",["Transform your gardening experience with our high-quality Garden Hose, 
                    designed to meet the diverse needs of every garden enthusiast. 
                    This hose is an essential tool for maintaining a lush, healthy garden, 
                    providing both durability and flexibility for all your watering tasks. 
                    Crafted from robust materials, this hose offers exceptional strength and resilience, 
                    ensuring it withstands the rigors of frequent use.

                    The Garden Hose features a kink-resistant design, allowing for uninterrupted water flow and ease of use, 
                    making your watering chores more efficient and enjoyable. Whether you're watering your flower beds, 
                    washing your car, or filling up a pool, this hose delivers consistent performance. 
                    The ergonomic, non-slip grip ensures comfortable handling, even when wet.
                                    
                    Versatility is at the core of this hose's design. With universal fittings, 
                    it connects effortlessly to any standard spigot and is compatible with a variety of nozzles and sprinklers, 
                    providing you with a customizable watering solution. Its UV-resistant outer layer protects it from 
                    sun damage, ensuring it maintains its flexibility and strength over time.
                                    
                    This Garden Hose isn't just a tool; it's an investment in your garden's health and beauty. 
                    It's a reliable companion for those who take pride in their outdoor spaces and a testament to the 
                    belief that a well-tended garden begins with the right equipment. With this hose in your gardening arsenal, 
                    you're well-equipped to nurture your plants and keep your garden thriving, 
                    season after season.",
                ]),
                'price' => 24.99,
                'stock' => 75,
                'category_id' => 5
            ],
            [
                'name' => "Lawn Sprinkler",
                'description' => join("\n\n",["Enhance your lawn care routine with our advanced Lawn Sprinkler, 
                    designed to deliver optimal water distribution for a lush, green lawn. 
                    This sprinkler is a must-have for any homeowner looking to maintain a healthy, vibrant yard with minimal effort. 
                    Constructed from high-grade materials, this sprinkler ensures durability and long-lasting performance.

                    The Lawn Sprinkler features an adjustable spray pattern, allowing you to customize the water coverage 
                    to suit different areas of your lawn. Whether you're watering a small patch of grass or a large expanse, 
                    this sprinkler provides even, consistent coverage. The efficient water usage helps conserve water 
                    while ensuring your lawn receives the nourishment it needs.

                    Versatility is a key feature of this sprinkler's design. It is compatible with all standard garden hoses 
                    and can easily be connected for immediate use. The sturdy base provides stability, 
                    preventing the sprinkler from tipping over during operation. Its UV-resistant exterior protects it from 
                    sun damage, ensuring it remains functional and attractive over time.

                    This Lawn Sprinkler isn't just a tool; it's an investment in your lawn's health and beauty. 
                    It's an essential companion for those who take pride in maintaining a pristine outdoor space and a testament 
                    to the belief that a beautiful lawn begins with the right equipment. With this sprinkler in your gardening arsenal, 
                    you're well-equipped to keep your lawn hydrated and thriving, making your yard the envy of the neighborhood.",
                ]),
                'price' => 29.99,
                'stock' => 50,
                'category_id' => 5,
            ],
            [
                'name' => "6.5L Litre Watering Can With Rose Strong Plastic Green",
                'description' => join("\n\n", [
                    "This 6.5L Watering Can with Rose is an essential tool for any gardener, designed to make watering your 
                    plants easy and efficient. Made from strong, durable plastic, this watering can is built to withstand 
                    regular use and various weather conditions, ensuring it remains a reliable gardening companion for years 
                    to come.",

                    "The watering can features a 6.5-liter capacity, providing ample water for your plants without the need 
                    for frequent refills. The included rose attachment ensures a gentle, even spray, making it ideal for 
                    watering delicate flowers and seedlings. The rose can be easily removed for a more direct water flow when
                    needed, offering versatility for different watering tasks.",

                    "Ergonomically designed, this watering can is easy to carry and pour. The well-balanced handle allows 
                    for comfortable use, reducing strain on your hands and wrists during extended watering sessions. 
                    The wide opening makes it easy to fill from any water source, while the robust spout provides precise 
                    control over the water flow.",

                    "The green color of this watering can not only blends seamlessly with your garden but also symbolizes 
                    the eco-friendly nature of gardening. It's a practical and stylish addition to any gardener's toolkit,
                    helping you maintain the health and beauty of your plants with ease.",

                    "This 6.5L Watering Can with Rose isn't just a tool; it's an investment in your garden's vitality.
                    It's perfect for gardeners of all levels, offering a combination of durability, functionality, and comfort.
                    With this watering can in your gardening arsenal, you're well-equipped to keep your plants hydrated 
                    and thriving throughout the growing season."
                ]),
                'price' => 9.99,
                'stock' => 150,
                'category_id' => 5,
            ],
            // Next four are Plant Protection and Pest Control - add category "Pest Control"
            [
                'name' => "Rat Poison",
                'description' => join("\n\n",["Protect your home and garden with our effective Rat Poison, 
                    formulated to eliminate rodent infestations quickly and efficiently. 
                    This rat poison is an essential tool for maintaining a safe and hygienic environment, 
                    whether you're dealing with a small infestation or a larger rodent problem. 
                    Crafted with powerful active ingredients, this product ensures high efficacy in eradicating rats and mice.

                    The Rat Poison features a potent formula that attracts rodents and delivers a lethal dose upon ingestion, 
                    ensuring swift elimination. The product is designed for easy placement in various locations, 
                    such as basements, garages, attics, and gardens, providing versatile pest control solutions. 
                    With its fast-acting properties, you can see results in a matter of days, giving you peace of mind.

                    Safety is a priority with this product. The Rat Poison is packaged in secure, tamper-resistant bait stations, 
                    minimizing the risk to children, pets, and non-target wildlife. Its weather-resistant design ensures it remains 
                    effective even in outdoor conditions, maintaining its potency and effectiveness over time.

                    This Rat Poison isn't just a product; it's an investment in the safety and cleanliness of your home. 
                    It's a reliable solution for those who prioritize a pest-free environment and a testament to the belief 
                    that effective pest control starts with the right products. With this rat poison in your pest control arsenal, 
                    you're well-equipped to tackle rodent problems and maintain a healthy, rodent-free space.",
                ]),
                'price' => 19.99,
                'stock' => 100,
                'category_id' => 5,
            ],
            [
                'name' => "Pest Repeller",
                'description' => join("\n\n", ["Safeguard your home and garden with our comprehensive Pest Control solution, 
                    designed to effectively eliminate a wide range of pests. This product is essential for anyone looking to maintain 
                    a pest-free environment, ensuring the safety and comfort of your living spaces. 
                    Formulated with powerful ingredients, this pest repeller solution targets insects, rodents, and other common pests.

                    The Pest Repeller solution features a fast-acting formula that provides immediate results, 
                    killing pests on contact and creating a protective barrier to prevent future infestations. 
                    Its versatile application allows you to use it both indoors and outdoors, making it suitable for 
                    homes, gardens, patios, and more. With its long-lasting effects, you can enjoy a pest-free environment for weeks.

                    Ease of use is a key feature of this product. The Pest Repeller solution comes with a convenient spray applicator, 
                    allowing for precise and controlled application in hard-to-reach areas. Its non-staining and odorless formula 
                    ensures it won't leave any marks or unpleasant smells, making it safe for use around your home and family.

                    This Pest Repeller solution isn't just a product; it's an investment in the health and safety of your environment. 
                    It's a reliable companion for those who prioritize a clean and pest-free living space and a testament 
                    to the belief that effective pest repeller starts with the right products. With this solution in your pest control arsenal, 
                    you're well-equipped to tackle any pest problem and maintain a healthy, comfortable home.",
                ]),
                'price' => 25.99,
                'stock' => 80,
                'category_id' => 5,
            ],
            [
                'name' => "The Big Cheese All-Weather Block Bait - 10g x 30 Kills Mice and Rats Damp-Proof, 
                          Weather-Resistant, Blue Difenacoum",
                'description' => join("\n\n", [
                    "The Big Cheese All-Weather Block Bait is an effective solution for controlling mice and rats. 
                    These 10g bait blocks are designed to kill rodents quickly and efficiently, ensuring a safe and 
                    hygienic environment for your home and garden. The bait blocks are formulated with blue difenacoum, 
                    a powerful rodenticide that attracts rodents and delivers a lethal dose upon ingestion.",

                    "These all-weather bait blocks are damp-proof and weather-resistant, making them suitable for use in 
                    various environments, including outdoor areas prone to moisture. Whether you need to address a rodent 
                    problem in your garden, shed, garage, or basement, these bait blocks provide reliable pest control even 
                    in challenging conditions.",

                    "The bait blocks are easy to use and can be placed in multiple locations where rodent activity has been 
                    observed. Their robust formulation ensures they remain effective over time, providing continuous protection against mice and rats. The compact size of each block makes it easy to place them in tight spaces, ensuring comprehensive coverage.",

                    "Safety is a priority with The Big Cheese All-Weather Block Bait. The bait blocks are designed to
                    minimize the risk to children, pets, and non-target wildlife. They are packaged in secure containers 
                    to prevent accidental exposure, and their distinctive blue color helps identify them as rodenticide.",

                    "This product isn't just a solution; it's an investment in the cleanliness and safety of your environment.
                     It's a reliable tool for those who prioritize a rodent-free space and a testament to the effectiveness 
                     of quality pest control products. With The Big Cheese All-Weather Block Bait in your pest control arsenal,
                     you're well-equipped to tackle rodent problems and maintain a healthy, rodent-free home."
                ]),
                'price' => 34.99,
                'stock' => 50,
                'category_id' => 5,
            ],
            [
                'name' => "Doff Slug & Snail Killer 800g",
                'description' => join("\n\n", [
                    "Doff Slug & Snail Killer is an effective and easy-to-use solution for controlling slugs and 
                    snails in your garden. This 800g container is filled with pellets designed to attract and kill 
                    these pests, protecting your plants from damage. The pellets are formulated with a powerful active 
                    ingredient that ensures fast and reliable results, keeping your garden healthy and vibrant.",

                    "The Doff Slug & Snail Killer is suitable for use around all edible and non-edible crops, 
                    making it a versatile choice for gardeners. The pellets are weather-resistant and remain effective
                    even in wet conditions, providing long-lasting protection. Simply scatter the pellets around your
                    plants to create a protective barrier that slugs and snails cannot cross.",

                    "Ease of use is a key feature of this product. The pellets can be applied straight from the 
                    container with no need for additional tools or equipment. They are designed to be highly attractive 
                    to slugs and snails, ensuring maximum effectiveness with minimal effort.",

                    "Safety is also considered in the design of this product. The pellets are blue in color to help 
                    prevent accidental ingestion by pets, birds, and other wildlife. Always use as directed to ensure 
                    safe and effective pest control.",

                    "This Doff Slug & Snail Killer isn't just a product; it's an investment in the health and beauty 
                    of your garden. It's a reliable solution for those who want to protect their plants and maintain 
                    a thriving garden. With this killer in your gardening arsenal, you're well-equipped to defend your 
                    plants against slugs and snails and enjoy a pest-free garden."
                ]),
                'price' => 12.99,
                'stock' => 200,
                'category_id' => 5,
            ],
            // Next five are Plant and Soil Monitoring (Need to add category for this "Plant & Soil Monitoring")
            [
                'name' => "Gardena smart Sensor: intelligent soil moisture meter for fully automatic watering of the garden",
                'description' => join("\n\n",["The Gardena smart Sensor is an intelligent soil moisture meter designed to provide 
                    fully automatic watering for your garden. Using the Gardena smart App, you can monitor and control the 
                    watering process effortlessly. 
                    
                    This smart sensor measures soil moisture and temperature, giving you precise 
                    data to optimize watering schedules. The device ensures that your plants receive the right amount of water, 
                    preventing both overwatering and underwatering. Versatility is a key feature of the Gardena smart Sensor.

                    It is compatible with the Gardena smart system, allowing seamless integration with other Gardena smart 
                    devices. While the smart Gateway is not included, it can be easily added to enhance functionality.
                    Ease of use is at the heart of this product's design. The sensor is simple to install and can be placed 
                    anywhere in your garden where monitoring is needed. Its robust construction ensures durability, and it 
                    is designed to withstand outdoor conditions.

                    This Gardena smart Sensor isn't just a product; it's an investment in the health and beauty of your garden. 
                    It's a reliable tool for those who are serious about gardening and a testament to the belief that the best 
                    gardens start with the best tools. With this sensor in your gardening arsenal, you're well-equipped to 
                    maintain a thriving, well-watered garden.",
                ]),
                'price' => 59.99,
                'stock' => 25,
                'category_id' => 5,
            ],
            [
                'name' => "Soil Moisture Meter",
                'description' => join("\n\n", ["Optimize your garden's watering schedule with our Soil Moisture Meter, 
                    designed to provide accurate moisture readings for your plants. This essential gardening tool 
                    helps you maintain a healthy garden by preventing overwatering and underwatering. 
                    The Soil Moisture Meter features a simple, easy-to-read display that shows the moisture level 
                    instantly, allowing you to make informed decisions about your watering needs.

                    The probe is designed for easy insertion into the soil, providing quick and reliable readings. 
                    Suitable for both indoor and outdoor use, this meter is perfect for monitoring houseplants, 
                    garden beds, and lawns. Its compact and portable design ensures that you can take it anywhere 
                    in your garden with ease.

                    Durability is key with this product. The Soil Moisture Meter is built to withstand regular use, 
                    ensuring it remains a reliable tool in your gardening arsenal. Its low-maintenance design requires 
                    no batteries, making it an eco-friendly choice for gardeners.

                    This Soil Moisture Meter isn't just a tool; it's an investment in the health of your garden. 
                    It's a must-have for gardeners who prioritize precision and efficiency in their watering routines. 
                    With this meter in your toolkit, you're well-equipped to provide your plants with the optimal moisture 
                    they need to thrive.",
                ]),
                'price' => 14.99,
                'stock' => 150,
                'category_id' => 5,
            ],
            [
                'name' => "Landrip Soil PH Tester",
                'description' => join("\n\n", [
                    "Ensure the optimal health of your plants with the Landrip Soil PH Tester. 
                    This essential gardening tool is designed to provide accurate and immediate readings 
                    of your soil's pH levels, helping you maintain the perfect environment for your plants. 
                    By measuring the acidity or alkalinity of your soil, you can make informed decisions on soil 
                    amendments and fertilizers, ensuring your garden thrives.",

                    "The Landrip Soil PH Tester features a simple and easy-to-read display, allowing you to 
                    quickly gauge your soil's pH levels. The probe is designed for easy insertion into the soil, 
                    providing reliable readings in both indoor and outdoor settings. Whether you're tending to 
                    houseplants, garden beds, or lawns, this pH tester is a versatile tool for all your gardening 
                    needs.",

                    "Durability is a hallmark of this product. Constructed with high-quality materials, 
                    the Landrip Soil PH Tester is built to withstand regular use, making it a reliable addition 
                    to your gardening toolkit. Its compact and portable design ensures that you can take it 
                    anywhere in your garden with ease, allowing for consistent monitoring of your soil's health.",

                    "This Landrip Soil PH Tester isn't just a tool; it's an investment in the vitality of your 
                    garden. It's a must-have for gardeners who are serious about creating the perfect growing 
                    conditions for their plants. With this tester in your toolkit, you're well-equipped to maintain 
                    the ideal pH balance in your soil, ensuring your plants receive the nutrients they need to flourish."
                ]),
                'price' => 18.99,
                'stock' => 200,
                'category_id' => 5,
            ],
            [
               'name' => "Dciustfhe Pack of 10 Soil Meter, 20 cm Plant Water Level Indicator, Water Level Indicator, Soil Meter, Sensor",
                'description' => join("\n\n", [
                    "Ensure your plants receive the right amount of water with the Dciustfhe Pack of 10 Soil Meters. 
                    These 20 cm Plant Water Level Indicators are essential tools for both home gardeners and professionals. 
                    Designed to accurately measure soil moisture levels, these meters help prevent overwatering and 
                    underwatering, promoting healthier plant growth.",

                    "The Dciustfhe Soil Meters feature a simple and clear display that shows the water level instantly. 
                    Each meter is equipped with a sensitive sensor that provides precise readings, making it easy to monitor 
                    the moisture levels of your plants. The 20 cm length is perfect for reaching deeper soil layers, ensuring 
                    comprehensive moisture assessment.",

                    "Versatility is a key feature of these water level indicators. Suitable for both indoor and outdoor use, 
                    they are ideal for potted plants, garden beds, and lawns. The compact and lightweight design allows for 
                    easy placement and removal, making them convenient tools for everyday gardening tasks.",

                    "Durability is assured with the Dciustfhe Soil Meters. Made from high-quality materials, these meters 
                    are built to withstand regular use and various environmental conditions. Their robust construction 
                    ensures long-lasting performance, providing reliable moisture readings season after season.",

                    "This Dciustfhe Pack of 10 Soil Meters isn't just a set of tools; it's an investment in the health and 
                    vitality of your plants. Perfect for gardeners who value precision and efficiency, these meters help 
                    maintain optimal watering schedules. With this pack of soil meters in your gardening arsenal, you're 
                    well-equipped to ensure your plants thrive with the right amount of moisture."
                ]),
                'price' => 29.99,
                'stock' => 120,
                'category_id' => 5, 
            ],
            [
                'name' => "Vortex Vitality Vprobe - Intelligent Plant Health Assistant - Soil Moisture Meter for Indoor Plants. Sunlight/Temperature/Humidity/Soil Moisture. Plant Speaks For Itself. WiFi IoT AI (Grey Sunshine)",
                'description' => join("\n\n", [
                    "Introducing the Vortex Vitality Vprobe, your intelligent plant health assistant designed to ensure
                    your indoor plants thrive. This advanced soil moisture meter not only measures soil moisture but also
                    monitors sunlight, temperature, and humidity, providing comprehensive insights into your plant's health.
                    With its WiFi IoT AI capabilities, the Vprobe allows your plants to communicate their needs directly to
                    you.",

                    "The Vortex Vitality Vprobe features a sleek design in Grey Sunshine, making it a stylish addition to any 
                    indoor garden. Its intuitive interface and real-time data transmission via WiFi ensure you are always 
                    informed about your plant's condition. The Vprobe's AI technology analyzes the data and provides 
                    personalized care recommendations, taking the guesswork out of plant care.",

                    "Ease of use is at the core of the Vprobe's design. Simply insert the probe into the soil, 
                    and it will start collecting data immediately. The device is compatible with various indoor plants, 
                    making it a versatile tool for plant enthusiasts. Its durable construction ensures long-lasting 
                    performance, providing reliable data over time.",

                    "With the Vortex Vitality Vprobe, maintaining optimal conditions for your plants has never been easier. 
                    The device alerts you to any changes in soil moisture, sunlight, temperature, or humidity, allowing you 
                    to adjust your care routine promptly. This proactive approach helps prevent common plant issues and 
                    promotes healthy growth.",

                    "The Vortex Vitality Vprobe isn't just a gadget; it's an investment in your plant's health and your 
                    peace of mind. Perfect for both novice and experienced gardeners, this intelligent assistant ensures 
                    your plants can 'speak' for themselves. With the Vprobe in your plant care arsenal, you're equipped with
                    the knowledge and tools to create the perfect indoor growing environment."
                ]),
                'price' => 49.99,
                'stock' => 80,
                'category_id' => 5,
            ],
            // Next 3 sections are for Garden Furniture and Accessories Sub-Category which should fall under Gardening-Essentials
            // Next 3 entries are for Sub-Category of Garden Furiture and Accessories called Garden Furniture Sets.
            [
                'name' => "bigzzia Rattan Garden Furniture Set, 4 piece Patio Rattan furniture sofa Weaving Wicker includes 2 Armchairs, 1 Double seat Sofa and 1 table",
                'description' => join("\n\n", [
                    "Elevate your outdoor living space with the bigzzia Rattan Garden Furniture Set. This 4-piece patio set 
                    is designed to combine style, comfort, and durability, making it the perfect addition to any garden, 
                    patio, or balcony. The set includes 2 armchairs, 1 double seat sofa, and 1 table, providing ample seating 
                    and a convenient surface for your outdoor entertaining needs.",

                    "Crafted from high-quality weaving wicker, this furniture set offers a sophisticated look that 
                    complements any outdoor decor. The rattan material is weather-resistant, ensuring that your furniture 
                    remains in excellent condition despite exposure to the elements. The sturdy steel frame provides robust 
                    support, guaranteeing longevity and stability for all pieces.",

                    "The armchairs and sofa are equipped with thick, comfortable cushions that are both water-resistant 
                    and easy to clean. The cushions provide optimal comfort, allowing you to relax and enjoy your outdoor 
                    space for hours. The ergonomic design of the seating ensures proper support, making this set ideal for 
                    lounging and socializing.",

                    "The included table features a tempered glass top, offering a sleek and practical surface for drinks, 
                    snacks, or decorative items. The glass is easy to clean and adds a touch of elegance to the overall design.
                    This table is the perfect centerpiece for your outdoor setup, providing both functionality and style.",

                    "This bigzzia Rattan Garden Furniture Set isn't just a collection of outdoor furniture; it's an investment 
                    in your outdoor lifestyle. It's perfect for those who value both aesthetics and comfort in their outdoor 
                    spaces. With this furniture set in your garden, you're well-equipped to host gatherings, relax in comfort, 
                    and enjoy the beauty of your outdoor environment."
                ]),
                'price' => 299.99,
                'stock' => 20,
                'category_id' => 5,
            ],
            [
                'name' => "Dawsons Living Faux Rattan Bistro Set - Conservatory Garden Patio and Decking Furniture Chairs and Glass Top Table Set",
                'description' => join("\n\n", [
                    "Enhance your outdoor living area with the Dawsons Living Faux Rattan Bistro Set. 
                    This elegant set is perfect for conservatories, gardens, patios, and decking areas, 
                    offering a stylish and comfortable seating solution for your outdoor space. The set 
                    includes two chairs and a glass top table, making it ideal for intimate gatherings and 
                    cozy outdoor meals.",
                    
                    "Crafted from high-quality faux rattan, this bistro set combines the classic look of 
                    natural rattan with the durability and low maintenance of synthetic materials. The faux 
                    rattan is weather-resistant and UV-protected, ensuring that your furniture retains its beauty 
                    and functionality even after prolonged exposure to the elements. The sturdy steel frame provides
                    excellent support and stability, enhancing the overall durability of the set.",
                    
                    "The chairs are designed with comfort in mind, featuring ergonomic shapes and cushioned 
                    seats that provide optimal relaxation. The cushions are water-resistant and easy to clean, 
                    ensuring that they remain fresh and comfortable throughout the seasons. The compact design 
                    of the chairs makes them easy to move and arrange, allowing you to customize your outdoor 
                    seating area to suit your needs.",
                    
                    "The table features a tempered glass top that adds a touch of sophistication to the set. 
                    The glass surface is easy to clean and maintain, making it perfect for outdoor dining and 
                    entertaining. The table's sturdy construction ensures that it can support various items, 
                    from beverages and snacks to decorative pieces.",
                    
                    "This Dawsons Living Faux Rattan Bistro Set isn't just a furniture set; it's an investment 
                    in your outdoor lifestyle. Perfect for those who appreciate both style and comfort, this set 
                    is designed to enhance your outdoor living experience. With this bistro set in your garden 
                    or patio, you're well-equipped to enjoy cozy meals, relaxing conversations, and the beauty 
                    of your outdoor space."
                ]),
                'price' => 149.99,
                'stock' => 50,
                'category_id' => 5,

            ],
            [
                'name' => "Kingfisher 12in (30cm) Dark Rattan Hanging Basket",
                'description' => join("\n\n", [
                    "Add a touch of elegance to your garden with the Kingfisher 12in (30cm) Dark Rattan Hanging Basket. This stylish hanging basket is perfect for showcasing your favorite flowers and plants, enhancing the beauty of your outdoor space. The dark rattan design provides a classic and sophisticated look that complements any garden decor.",
                    
                    "Crafted from high-quality materials, the Kingfisher Hanging Basket is both durable and weather-resistant, ensuring it can withstand the elements and remain in excellent condition throughout the seasons. The sturdy construction provides reliable support for your plants, while the included metal chains and hook make it easy to hang securely in your garden, patio, or balcony.",
                    
                    "The basket features a spacious 12-inch diameter, providing ample room for a variety of plants and flowers. Its depth allows for adequate soil capacity, promoting healthy root growth and ensuring your plants have the nutrients they need to thrive. The natural rattan finish adds a rustic charm, making this hanging basket a beautiful addition to any outdoor setting.",
                    
                    "Ease of use is at the heart of this product's design. The Kingfisher Hanging Basket comes with a pre-lined interior, saving you time and effort during planting. The liner helps retain moisture, reducing the frequency of watering and keeping your plants healthy and hydrated.",
                    
                    "This Kingfisher 12in Dark Rattan Hanging Basket isn't just a container; it's an investment in the aesthetic appeal of your garden. It's a perfect choice for gardeners who value both functionality and style. With this hanging basket in your gardening arsenal, you're well-equipped to create stunning floral displays that will impress your guests and enhance your outdoor environment."
                ]),
                'price' => 14.99,
                'stock' => 100,
                'category_id' => 5,
            ],
            // Next 3 entries are for Sub-Category of Garden Furiture and Accessories called Outdoor Screens & Protection.
            [

            ],
        ];

        $hardcodedImages = [
            'Laptop Pro Elite | 15.6 Quad-HD Display with Intel Core i9 | AI-Enhanced Graphics ' => [
                '/images/Lapbook.jpg',
                '/images/Lapbook2.jpg',
                '/images/Lapbook3.jpg',
                '/images/Lapbook4.jpg',
                '/images/Lapbook5.jpg'
            ],
            'iPhone X Infinity - 64GB with Super Retina Display & Advanced Face ID ' => [
                '/images/Iphone.png',
                '/images/Iphone2.jpg',
                '/images/Iphone3.png',
                '/images/Iphone4.png'
            ],
            'SoundWave Pro Bluetooth Headphones with Noise-Cancellation and Extended Bass' => [
                '/images/BluetoothHeadphones.jpg',
                '/images/BluetoothHeadphones2.jpg',
                '/images/BluetoothHeadphones3.jpg'
            ],
            'Trailblazer Sprint - High-Performance Running Shoes with Adaptive Cushioning' => [
                '/images/RunningShoes.jpg',
                '/images/RunningShoes2.jpg',
                '/images/RunningShoes3.jpg',
                '/images/RunningShoes4.jpg',
                '/images/RunningShoes5.jpg'
            ],
            'Serenity Grip Yoga Mat - Eco-Friendly Material with Alignment Markers' => [
                '/images/yogamat.jpg',
                '/images/yogamat2.jpg',
                '/images/yogamat3.jpg'
            ],
            'AceMaster Tournament Tennis Racket with Precision Control and Swift Swing' => [
                '/images/TennisRacket.jpg',
                '/images/TennisRacket2.jpg'
            ],
            'Harry Potter Collection' => [
                '/images/HarryPotterCollection.jpg',
                '/images/HarryPotterCollection2.jpg'
            ],
            'Cooking Pan' => [
                '/images/CookingPan.jpg',
                '/images/CookingPan2.jpg'
            ],
            'Hose Pipe' => [
                '/images/GardenHose.jpg',
                '/images/GardenHose2.jpg',
                '/images/GardenHose3.jpg'
            ],
            'Lawn Sprinkler' => [
                '/images/Sprinkler.jpg',
                '/images/Sprinkler.jpg',
            ],
            'Rat Poison' => [
                '/images/RatPoison.jpg',
            ],
            'Pest Repeller' => [
                'images/PestRepeller.jpg',
                'images/PestRepeller2.jpg',
            ],
            'Garden Smart Meter' => [
                'images/GardenSmartMeter.jpg',
                'images/GardenSmartMeter2.jpg',
                'images/GardenSmartMeter3.jpg',
            ],
            'Soil Moisture Meter' => [
                'images/SoilMoistureMeter.jpg',
                'images/SoilMoistureMeter2.jpg',
            ],
            'Landrip Soil PH Tester' => [
                'images/LandripSoilPHTester.jpg',
                'images/LandripSoilPHTester2.jpg',
                'images/LandripSoilPHTester3.jpg',
            ],
            'Dciustfhe Pack of 10 Soil Meter' => [
                'images/DciustfhePackof10SoilMeter.jpg',
                'images/DciustfhePackof10SoilMeter2.jpg',
                'images/DciustfhePackof10SoilMeter3.jpg',
                'images/DciustfhePackof10SoilMeter4.jpg',
            ],
            'Vortex Vitality Vprobe' => [
                'images/VortexVitalityVprobe.jpg',
                'images/VortexVitalityVprobe2.jpg',
                'images/VortexVitalityVprobe3.jpg',
            ],
            'The Big Cheese All-Weather Block Bait' => [
                'images/TheBigCheeseAllWeatherBlockBait.jpg',
                'images/TheBigCheeseAllWeatherBlockBait2.jpg',
                'images/TheBigCheeseAllWeatherBlockBait3.jpg',
            ],
            'Doff Slug & Snail Killer 800g' => [
                'images/DoffSlug&SnailKiller800g.jpg',
                'images/DoffSlug&SnailKiller800g2.jpg',
            ],
            '6.5L Litre Watering Can With Rose Strong Plastic Green' => [
                'images/WateringCan.jpg',
                'images/WateringCan2.jpg',
            ],
            'Bigzzia Rattan Garden Furniture Set' => [
                'images/BigzziaRattanGardenFurnitureSet.jpg',
                'images/BigzziaRattanGardenFurnitureSet2.jpg',
                'images/BigzziaRattanGardenFurnitureSet3.jpg',
            ],
            'Dawsons Living Faux Rattan Bistro Set' => [
                'images/DawsonsLivingFauxRattanBistroSet.jpg',
                'images/DawsonsLivingFauxRattanBistroSet2.jpg',
            ],
            'Kingfisher 12in (30cm) Dark Rattan Hanging Basket' => [
                'images/KingfisherDarkRattanHangingBasket.jpg',
                'images/KingfisherDarkRattanHangingBasket2.jpg',
            ],

        ];

        $faker = Faker::create();  

        foreach ($products as $productData) {
            $product = Product::create($productData);
            Log::info('Product created: ' . $product->id);

            // Check if exist hardcoded images for current product
            if (array_key_exists($product->name, $hardcodedImages)) {
                foreach ($hardcodedImages[$product->name] as $imagePath) {
                    ProductImage::create([
                        'product_id' => $product->id,
                        'url' => $imagePath,
                    ]);
                    Log::info('Image added for product ' . $product->id);
                }
            }
        }

        // Factory-generated products assign images randomly
        Product::factory(10)->create(['category_id' => rand(1, 4)])
        ->each(function ($product) use ($faker) {
            // Generate between 3 and 5 images
            $numberOfImages = rand(3, 5);
            for ($i = 0; $i < $numberOfImages; $i++) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'url' => $faker->imageUrl(640, 480, 'products', true),
                ]);
            }
        });
    }
}
