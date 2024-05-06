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
                'description' => "Unlock the secrets of gourmet chefs with our premium Cooking Pan, 
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
                'price' => 35.99,
                'stock' => 60,
                'category_id' => 4
            ]
        ];

        $hardcodedImages = [
            'Laptop Pro Elite | 15.6 Quad-HD Display with Intel Core i9 | AI-Enhanced Graphics ' => [
                '/images/Lapbook.jpg',
                '/images/Lapbook2.jpg',
                '/images/Lapbook3.jpg'
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
