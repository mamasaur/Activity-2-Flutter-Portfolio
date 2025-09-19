<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog Management System - Hermoinevehlle's Portfolio</title>
    <link rel="stylesheet" href="C:\Vehlle\style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .project-demo {
            background: rgba(255, 255, 255, 0.9);
            border: 2px solid rgba(248, 180, 203, 0.2);
            border-radius: 25px;
            padding: 2.5rem;
            margin: 2rem 0;
            backdrop-filter: blur(10px);
            box-shadow: 0 6px 25px rgba(248, 180, 203, 0.1);
        }
        .php-output {
            background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%);
            color: #e2e8f0;
            padding: 2rem;
            border-radius: 20px;
            margin: 1.5rem 0;
            line-height: 1.8;
            font-family: 'Courier New', monospace;
            box-shadow: 0 4px 15px rgba(26, 32, 44, 0.3);
        }
        .code-block {
            background: #2d3748;
            color: #e2e8f0;
            padding: 2rem;
            border-radius: 20px;
            margin: 1.5rem 0;
            overflow-x: auto;
            font-family: 'Courier New', monospace;
            box-shadow: 0 4px 15px rgba(45, 55, 72, 0.3);
        }
        .code-comment {
            color: #68d391;
        }
        .back-btn {
            margin: 2rem 0;
            display: inline-block;
        }
        .catalog-demo {
            background: linear-gradient(135deg, #fdf2f8 0%, #fce7f3 100%);
            color: #374151;
            padding: 2.5rem;
            border-radius: 25px;
            margin: 2rem 0;
            border: 2px solid rgba(248, 180, 203, 0.3);
            box-shadow: 0 6px 25px rgba(248, 180, 203, 0.15);
        }
        .array-section {
            background: rgba(255, 255, 255, 0.8);
            padding: 1.5rem;
            border-radius: 15px;
            margin: 1rem 0;
            border-left: 4px solid #ec4899;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <h2>Hermoinevehlle</h2>
                <span class="section-tag">BSIT-204</span>
            </div>
            <ul class="nav-menu">
                <li><a href="C:\Users\xchya\Vehlle\index.php" class="nav-link">← Back to Portfolio</a></li>
            </ul>
        </div>
    </nav>

    <main style="padding-top: 100px;">
        <section class="container">
            <div class="back-btn">
                <a href="C:\Vehlle\index.php" class="btn secondary">← Back to Portfolio</a>
            </div>
            
            <h1 class="section-title">Product Catalog Management System 🎀</h1>
            <p class="section-subtitle">Comprehensive PHP arrays showcase from simple-indexed to complex multidimensional structures ✨</p>

            <div class="project-demo">
                <h2 style="color: #ec4899; margin-bottom: 1.5rem;">🛍️ Project Overview 💕</h2>
                <p style="font-size: 1.1rem; margin-bottom: 1.5rem;">This comprehensive exercise showcases PHP arrays in various forms, from simple-indexed arrays to complex multidimensional structures. The project elaborates on managing a product catalog with the use of different array types, demonstrating real-world application of PHP data structures.</p>
                
                <div class="array-section">
                    <h3 style="color: #374151; margin-bottom: 1rem;">📋 Array Types Demonstrated:</h3>
                    <ul style="color: #4b5563; line-height: 1.8;">
                        <li><strong>Indexed Arrays:</strong> Displaying product names and prices through numbered indexes</li>
                        <li><strong>Associative Arrays:</strong> Describing product features with key-value pairs</li>
                        <li><strong>Multidimensional Arrays:</strong> Organizing the complete catalog structure</li>
                        <li><strong>Dynamic Presentation:</strong> Using foreach loops for interactive data display</li>
                    </ul>
                </div>
            </div>

            <div class="catalog-demo">
                <h2 style="margin-bottom: 1.5rem; color: #ec4899;">🏪 Live Product Catalog Demo ✨</h2>
                <p style="margin-bottom: 1rem;">Watch how different array types work together to create a complete product management system!</p>
            </div>

            <div class="project-demo">
                <h2 style="color: #ec4899; margin-bottom: 1.5rem;">🌟 Live PHP Output</h2>
                <div class="php-output">
                    <?php
                    echo "<div style='border-bottom: 2px solid #4a5568; padding-bottom: 1rem; margin-bottom: 1.5rem;'>";
                    echo "<h3 style='color: #fbbf24; margin-bottom: 1rem;'>📦 INDEXED ARRAYS - Basic Product Data</h3>";
                    echo "</div>";
                    
                    $productNames = [
                        "Wireless Bluetooth Headphones",
                        "Smart Fitness Watch", 
                        "Portable Power Bank",
                        "USB-C Fast Charger",
                        "Laptop Stand with Cooling"
                    ];
                    
                    $productPrices = [89.99, 199.99, 45.99, 29.99, 75.99];
                    $discountPercentages = [15, 20, 10, 5, 12];
                    
                    echo "<strong style='color: #10b981;'>Product Names:</strong><br>";
                    foreach($productNames as $index => $name) {
                        $originalPrice = $productPrices[$index];
                        $discount = $discountPercentages[$index];
                        $finalPrice = $originalPrice * (1 - $discount/100);
                        
                        echo "🔹 <span style='color: #e2e8f0;'>" . ($index + 1) . ". " . $name . "</span><br>";
                        echo "   💰 Price: <span style='color: #fbbf24;'>$" . number_format($finalPrice, 2) . "</span> ";
                        echo "<span style='color: #f87171; text-decoration: line-through;'>$" . number_format($originalPrice, 2) . "</span> ";
                        echo "<span style='color: #10b981;'>(" . $discount . "% off)</span><br><br>";
                    }
                    
                    echo "<div style='border-bottom: 2px solid #4a5568; padding-bottom: 1rem; margin: 2rem 0 1.5rem 0;'>";
                    echo "<h3 style='color: #fbbf24; margin-bottom: 1rem;'>🏷️ ASSOCIATIVE ARRAYS - Detailed Product Features</h3>";
                    echo "</div>";
                    
                    $featuredProduct = [
                        "name" => "Premium Wireless Bluetooth Headphones",
                        "brand" => "TechSound Pro",
                        "price" => 89.99,
                        "discount" => 15,
                        "category" => "Audio Equipment",
                        "features" => [
                            "Active Noise Cancellation",
                            "30-hour Battery Life", 
                            "Quick Charge Technology",
                            "Premium Sound Quality"
                        ],
                        "specifications" => [
                            "connectivity" => "Bluetooth 5.2",
                            "weight" => "285g",
                            "colors" => ["Black", "White", "Rose Gold"],
                            "warranty" => "2 Years International"
                        ],
                        "inStock" => true,
                        "stockQuantity" => 47,
                        "rating" => 4.8,
                        "reviewCount" => 1247
                    ];
                    
                    $finalPrice = $featuredProduct["price"] * (1 - $featuredProduct["discount"]/100);
                    
                    echo "<div style='background: rgba(16, 185, 129, 0.1); padding: 1.5rem; border-radius: 10px; margin: 1rem 0;'>";
                    echo "<strong style='color: #10b981; font-size: 1.2rem;'>✨ " . $featuredProduct["name"] . "</strong><br><br>";
                    echo "🏢 <strong>Brand:</strong> " . $featuredProduct["brand"] . "<br>";
                    echo "📂 <strong>Category:</strong> " . $featuredProduct["category"] . "<br>";
                    echo "💰 <strong>Price:</strong> <span style='color: #fbbf24;'>$" . number_format($finalPrice, 2) . "</span> ";
                    echo "<span style='color: #f87171; text-decoration: line-through;'>$" . number_format($featuredProduct["price"], 2) . "</span><br>";
                    echo "📦 <strong>Stock:</strong> " . ($featuredProduct["inStock"] ? "<span style='color: #10b981;'>✅ " . $featuredProduct["stockQuantity"] . " available</span>" : "<span style='color: #ef4444;'>❌ Out of stock</span>") . "<br>";
                    echo "⭐ <strong>Rating:</strong> <span style='color: #fbbf24;'>" . $featuredProduct["rating"] . "/5</span> (" . $featuredProduct["reviewCount"] . " reviews)<br><br>";
                    
                    echo "<strong style='color: #e2e8f0;'>🌟 Key Features:</strong><br>";
                    foreach($featuredProduct["features"] as $feature) {
                        echo "   ✓ <span style='color: #10b981;'>" . $feature . "</span><br>";
                    }
                    
                    echo "<br><strong style='color: #e2e8f0;'>📋 Specifications:</strong><br>";
                    foreach($featuredProduct["specifications"] as $key => $value) {
                        echo "   🔹 <strong>" . ucfirst($key) . ":</strong> ";
                        if(is_array($value)) {
                            echo "<span style='color: #fbbf24;'>" . implode(", ", $value) . "</span><br>";
                        } else {
                            echo "<span style='color: #fbbf24;'>" . $value . "</span><br>";
                        }
                    }
                    echo "</div>";
                    
                    echo "<div style='border-bottom: 2px solid #4a5568; padding-bottom: 1rem; margin: 2rem 0 1.5rem 0;'>";
                    echo "<h3 style='color: #fbbf24; margin-bottom: 1rem;'>🏬 MULTIDIMENSIONAL ARRAYS - Complete Catalog Structure</h3>";
                    echo "</div>";
                    
                    $productCatalog = [
                        "audio" => [
                            [
                                "id" => "AUD001",
                                "name" => "Wireless Bluetooth Headphones",
                                "brand" => "TechSound Pro",
                                "price" => 89.99,
                                "discount" => 15,
                                "inStock" => true,
                                "stockQty" => 47
                            ],
                            [
                                "id" => "AUD002", 
                                "name" => "Gaming Headset with RGB",
                                "brand" => "GameTech",
                                "price" => 129.99,
                                "discount" => 20,
                                "inStock" => true,
                                "stockQty" => 23
                            ]
                        ],
                        "wearables" => [
                            [
                                "id" => "WEAR001",
                                "name" => "Smart Fitness Watch",
                                "brand" => "FitTech Pro",
                                "price" => 199.99,
                                "discount" => 25,
                                "inStock" => true,
                                "stockQty" => 31
                            ],
                            [
                                "id" => "WEAR002",
                                "name" => "Smart Ring Health Monitor", 
                                "brand" => "HealthRing",
                                "price" => 299.99,
                                "discount" => 10,
                                "inStock" => false,
                                "stockQty" => 0
                            ]
                        ],
                        "accessories" => [
                            [
                                "id" => "ACC001",
                                "name" => "Portable Power Bank 20000mAh",
                                "brand" => "PowerCore",
                                "price" => 45.99,
                                "discount" => 12,
                                "inStock" => true,
                                "stockQty" => 89
                            ],
                            [
                                "id" => "ACC002",
                                "name" => "Laptop Stand with Cooling",
                                "brand" => "DeskTech",
                                "price" => 75.99,
                                "discount" => 8,
                                "inStock" => true,
                                "stockQty" => 15
                            ]
                        ]
                    ];
                    
                    foreach($productCatalog as $categoryName => $products) {
                        echo "<div style='background: rgba(236, 72, 153, 0.1); padding: 1.5rem; border-radius: 15px; margin: 1.5rem 0; border-left: 4px solid #ec4899;'>";
                        echo "<h4 style='color: #ec4899; margin-bottom: 1rem; text-transform: uppercase; font-weight: bold;'>📂 " . strtoupper($categoryName) . " CATEGORY</h4>";
                        
                        foreach($products as $product) {
                            $finalPrice = $product["price"] * (1 - $product["discount"]/100);
                            
                            echo "<div style='background: rgba(255, 255, 255, 0.8); padding: 1rem; border-radius: 10px; margin: 0.5rem 0;'>";
                            echo "<strong style='color: #374151;'>🔸 " . $product["name"] . "</strong><br>";
                            echo "   🏷️ ID: <span style='color: #6b7280;'>" . $product["id"] . "</span><br>";
                            echo "   🏢 Brand: <span style='color: #374151;'>" . $product["brand"] . "</span><br>";
                            echo "   💰 Price: <span style='color: #10b981; font-weight: bold;'>$" . number_format($finalPrice, 2) . "</span>";
                            if($product["discount"] > 0) {
                                echo " <span style='color: #f87171; text-decoration: line-through;'>$" . number_format($product["price"], 2) . "</span>";
                                echo " <span style='color: #ec4899;'>(-" . $product["discount"] . "%)</span>";
                            }
                            echo "<br>";
                            echo "   📦 Stock: ";
                            if($product["inStock"] && $product["stockQty"] > 0) {
                                echo "<span style='color: #10b981;'>✅ " . $product["stockQty"] . " available</span>";
                            } else {
                                echo "<span style='color: #ef4444;'>❌ Out of stock</span>";
                            }
                            echo "<br></div>";
                        }
                        echo "</div>";
                    }
                    
                    $totalProducts = 0;
                    $totalValue = 0;
                    $inStockCount = 0;
                    
                    foreach($productCatalog as $category => $products) {
                        foreach($products as $product) {
                            $totalProducts++;
                            $finalPrice = $product["price"] * (1 - $product["discount"]/100);
                            $totalValue += $finalPrice * $product["stockQty"];
                            if($product["inStock"]) $inStockCount++;
                        }
                    }
                    
                    echo "<div style='background: linear-gradient(135deg, #10b981, #059669); padding: 2rem; border-radius: 15px; margin: 2rem 0; color: white;'>";
                    echo "<h4 style='margin-bottom: 1rem; font-size: 1.2rem;'>📊 CATALOG SUMMARY</h4>";
                    echo "📋 <strong>Total Products:</strong> " . $totalProducts . "<br>";
                    echo "📂 <strong>Categories:</strong> " . count($productCatalog) . "<br>";
                    echo "✅ <strong>In Stock:</strong> " . $inStockCount . " products<br>";
                    echo "💰 <strong>Total Inventory Value:</strong> $" . number_format($totalValue, 2) . "<br>";
                    echo "</div>";
                    ?>
                </div>
            </div>

            <div class="project-demo">
                <h2 style="color: #ec4899; margin-bottom: 1.5rem;">💻 Code Structure & Implementation 🌸</h2>
                <div class="code-block">
<pre><code><span class="code-comment">// 1. INDEXED ARRAYS - Simple product lists with numerical indexes</span>
$productNames = [
    "Wireless Bluetooth Headphones",
    "Smart Fitness Watch", 
    "Portable Power Bank",
    "USB-C Fast Charger",
    "Laptop Stand with Cooling"
];
$productPrices = [89.99, 199.99, 45.99, 29.99, 75.99];

<span class="code-comment">// 2. ASSOCIATIVE ARRAYS - Key-value pairs for detailed product info</span>
$featuredProduct = [
    "name" => "Premium Wireless Bluetooth Headphones",
    "brand" => "TechSound Pro",
    "price" => 89.99,
    "features" => ["Active Noise Cancellation", "30-hour Battery"],
    "specifications" => [
        "connectivity" => "Bluetooth 5.2",
        "colors" => ["Black", "White", "Rose Gold"]
    ],
    "inStock" => true,
    "rating" => 4.8
];

<span class="code-comment">// 3. MULTIDIMENSIONAL ARRAYS - Complete catalog structure</span>
$productCatalog = [
    "audio" => [
        [
            "id" => "AUD001",
            "name" => "Wireless Bluetooth Headphones",
            "price" => 89.99,
            "inStock" => true
        ]
    ],
    "wearables" => [
        [
            "id" => "WEAR001", 
            "name" => "Smart Fitness Watch",
            "price" => 199.99,
            "inStock" => true
        ]
    ]
];

<span class="code-comment">// 4. DYNAMIC PRESENTATION - Foreach loops for data display</span>
foreach($productCatalog as $categoryName => $products) {
    echo "Category: " . strtoupper($categoryName) . "\n";
    
    foreach($products as $product) {
        echo "- " . $product["name"] . ": $" . $product["price"] . "\n";
        echo "  Stock: " . ($product["inStock"] ? "Available" : "Out of Stock") . "\n";
    }
}</code></pre>
                </div>
            </div>

            <div class="project-demo">
                <h2 style="color: #ec4899; margin-bottom: 1.5rem;">🎓 What I Learned 🌺</h2>
                <div style="color: #374151; line-height: 1.8;">
                    <div class="array-section">
                        <h3 style="color: #ec4899; margin-bottom: 1rem;">📚 Key Learning Outcomes:</h3>
                        <ul>
                            <li><strong>Array Types Mastery:</strong> Understanding when to use indexed vs associative vs multidimensional arrays</li>
                            <li><strong>Data Organization:</strong> Structuring complex product information in logical, accessible formats</li>
                            <li><strong>Dynamic Processing:</strong> Using foreach loops to iterate through different array structures efficiently</li>
                            <li><strong>Real-world Application:</strong> Building practical solutions for e-commerce product management</li>
                            <li><strong>Data Relationships:</strong> Managing interconnected product data across categories and specifications</li>
                            <li><strong>Performance Considerations:</strong> Optimizing array structures for fast data retrieval and display</li>
                        </ul>
                    </div>
                    
                    <div class="array-section">
                        <h3 style="color: #ec4899; margin-bottom: 1rem;">🚀 Skills Developed:</h3>
                        <ul>
                            <li>Complex data structure design and implementation</li>
                            <li>Dynamic content generation from structured data</li>
                            <li>Efficient array manipulation and traversal techniques</li>
                            <li>Real-world problem solving through programming</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="back-btn">
                <a href="C:\Vehlle\index.php" class="btn primary">← Back to Portfolio</a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Hermoinevehlle Cristobal Jacinto | BSIT-204 | PHP Product Catalog Project</p>
        </div>
    </footer>
</body>
</html>