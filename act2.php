<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard & Profile Manager - Hermoinevehlle's Portfolio</title>
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
        .dashboard-demo {
            background: linear-gradient(135deg, #fdf2f8 0%, #fce7f3 100%);
            color: #374151;
            padding: 2.5rem;
            border-radius: 25px;
            margin: 2rem 0;
            border: 2px solid rgba(248, 180, 203, 0.3);
            box-shadow: 0 6px 25px rgba(248, 180, 203, 0.15);
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
        .dashboard-card {
            background: rgba(255, 255, 255, 0.8);
            padding: 1.5rem;
            border-radius: 15px;
            margin: 1rem 0;
            border-left: 4px solid #ec4899;
            box-shadow: 0 2px 10px rgba(248, 180, 203, 0.1);
        }
        .user-stat {
            display: inline-block;
            background: rgba(236, 72, 153, 0.1);
            color: #be185d;
            padding: 0.5rem 1rem;
            border-radius: 15px;
            margin: 0.25rem;
            font-weight: 600;
            border: 1px solid rgba(236, 72, 153, 0.2);
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
                <li><a href="C:\Vehlle\index.php" class="nav-link">← Back to Portfolio</a></li>
            </ul>
        </div>
    </nav>

    <main style="padding-top: 100px;">
        <section class="container">
            <div class="back-btn">
                <a href="C:\Vehlle\index.php" class="btn secondary">← Back to Portfolio</a>
            </div>
            
            <h1 class="section-title">User Dashboard & Profile Manager 🎀</h1>
            <p class="section-subtitle">A user-friendly interface for personal information management and activity tracking ✨</p>

            <div class="project-demo">
                <h2 style="color: #ec4899; margin-bottom: 1.5rem;">👤 Project Overview 💕</h2>
                <p style="font-size: 1.1rem; margin-bottom: 1.5rem;">This interface allows users to have access to their own information, manage their account, and check their activities on the website. Basically, it is a place on the website where users can find and change their information. It is a user-friendly tool in PHP that allows logged-in users to manage their data.</p>
                
                <div class="dashboard-card">
                    <h3 style="color: #374151; margin-bottom: 1rem;">🌟 Key Features:</h3>
                    <ul style="color: #4b5563; line-height: 1.8;">
                        <li><strong>Personal Profile Management:</strong> Update contact information, bio, and preferences</li>
                        <li><strong>Account Settings:</strong> Security settings, password management, and privacy controls</li>
                        <li><strong>Activity Tracking:</strong> Monitor login history and website interactions</li>
                        <li><strong>User-Friendly Interface:</strong> Clean, intuitive design for easy navigation</li>
                    </ul>
                </div>
            </div>

            <div class="dashboard-demo">
                <h2 style="margin-bottom: 1.5rem; color: #ec4899;">🏠 Live Dashboard Interface ✨</h2>
                <p style="margin-bottom: 1rem;">Experience a personalized user dashboard with real-time data management!</p>
            </div>

            <div class="project-demo">
                <h2 style="color: #ec4899; margin-bottom: 1.5rem;">🌟 Live Dashboard Demo</h2>
                <div class="php-output">
                    <?php
                    $currentUser = [
                        "id" => 1001,
                        "username" => "hermoinevehlle_jacinto",
                        "email" => "hermoinevehlle.jacinto@student.edu",
                        "firstName" => "Hermoinevehlle",
                        "lastName" => "Cristobal Jacinto",
                        "section" => "BSIT-204",
                        "memberSince" => "2024-01-15",
                        "lastLogin" => "2024-09-19 08:30:00",
                        "profilePicture" => "profile_hermoine.jpg",
                        "bio" => "A passionate beginner in programming, currently exploring various technologies and building my foundation in computer science.",
                        "isActive" => true,
                        "emailVerified" => true,
                        "twoFactorEnabled" => false
                    ];

                    $userPreferences = [
                        "theme" => "cute-pink",
                        "notifications" => [
                            "email" => true,
                            "browser" => true,
                            "mobile" => false
                        ],
                        "privacy" => [
                            "profileVisibility" => "public",
                            "showEmail" => false,
                            "showLastSeen" => true
                        ],
                        "language" => "English",
                        "timezone" => "Asia/Manila"
                    ];

                    $recentActivities = [
                        [
                            "action" => "Profile Updated",
                            "timestamp" => "2025-09-19 08:15:00",
                            "details" => "Updated bio information",
                            "ip" => "192.168.1.100"
                        ],
                        [
                            "action" => "Login",
                            "timestamp" => "2025-09-19 08:00:00", 
                            "details" => "Successful login from desktop",
                            "ip" => "192.168.1.100"
                        ],
                        [
                            "action" => "Password Changed",
                            "timestamp" => "202-09-18 14:30:00",
                            "details" => "Password updated successfully",
                            "ip" => "192.168.1.100"
                        ],
                        [
                            "action" => "Email Verified",
                            "timestamp" => "2025-09-15 10:45:00",
                            "details" => "Email address verified",
                            "ip" => "192.168.1.95"
                        ]
                    ];

                    $accountStats = [
                        "totalLogins" => 47,
                        "profileViews" => 123,
                        "projectsCreated" => 2,
                        "lastPasswordChange" => "2025-09-18",
                        "accountAge" => 247
                    ];

                    echo "<div style='border-bottom: 2px solid #4a5568; padding-bottom: 1rem; margin-bottom: 1.5rem;'>";
                    echo "<h3 style='color: #fbbf24; margin-bottom: 1rem;'>👤 PERSONAL PROFILE INFORMATION</h3>";
                    echo "</div>";

                    echo "<div style='background: rgba(16, 185, 129, 0.1); padding: 2rem; border-radius: 15px; margin: 1rem 0;'>";
                    echo "<div style='display: flex; align-items: center; margin-bottom: 1.5rem;'>";
                    echo "<div style='width: 60px; height: 60px; background: linear-gradient(135deg, #ec4899, #f472b6); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;'>";
                    echo "<span style='color: white; font-size: 1.5rem; font-weight: bold;'>" . substr($currentUser["firstName"], 0, 1) . substr($currentUser["lastName"], 0, 1) . "</span>";
                    echo "</div>";
                    echo "<div>";
                    echo "<h4 style='color: #374151; margin: 0; font-size: 1.3rem;'>" . $currentUser["firstName"] . " " . $currentUser["lastName"] . "</h4>";
                    echo "<p style='color: #6b7280; margin: 0;'>@" . $currentUser["username"] . " • " . $currentUser["section"] . "</p>";
                    echo "</div></div>";

                    echo "<div style='background: rgba(255, 255, 255, 0.8); padding: 1.5rem; border-radius: 10px; margin: 1rem 0;'>";
                    echo "📧 <strong>Email:</strong> <span style='color: #374151;'>" . $currentUser["email"] . "</span> ";
                    echo ($currentUser["emailVerified"] ? "<span style='color: #10b981;'>✅ Verified</span>" : "<span style='color: #ef4444;'>❌ Not Verified</span>") . "<br>";
                    echo "📅 <strong>Member Since:</strong> <span style='color: #374151;'>" . date("F j, Y", strtotime($currentUser["memberSince"])) . "</span><br>";
                    echo "🕒 <strong>Last Login:</strong> <span style='color: #374151;'>" . date("M j, Y - g:i A", strtotime($currentUser["lastLogin"])) . "</span><br>";
                    echo "🔐 <strong>Two-Factor Auth:</strong> " . ($currentUser["twoFactorEnabled"] ? "<span style='color: #10b981;'>✅ Enabled</span>" : "<span style='color: #f59e0b;'>⚠️ Disabled</span>") . "<br>";
                    echo "📝 <strong>Bio:</strong> <span style='color: #6b7280; font-style: italic;'>" . $currentUser["bio"] . "</span><br>";
                    echo "</div>";
                    echo "</div>";

                    echo "<div style='border-bottom: 2px solid #4a5568; padding-bottom: 1rem; margin: 2rem 0 1.5rem 0;'>";
                    echo "<h3 style='color: #fbbf24; margin-bottom: 1rem;'>⚙️ ACCOUNT SETTINGS & PREFERENCES</h3>";
                    echo "</div>";

                    echo "<div style='background: rgba(236, 72, 153, 0.1); padding: 2rem; border-radius: 15px; margin: 1rem 0; border-left: 4px solid #ec4899;'>";
                    echo "<h4 style='color: #ec4899; margin-bottom: 1rem;'>🎨 Interface Preferences</h4>";
                    echo "<div style='background: rgba(255, 255, 255, 0.8); padding: 1rem; border-radius: 10px;'>";
                    echo "🌈 <strong>Theme:</strong> <span class='user-stat'>" . ucwords(str_replace('-', ' ', $userPreferences["theme"])) . "</span><br>";
                    echo "🌍 <strong>Language:</strong> <span class='user-stat'>" . $userPreferences["language"] . "</span><br>";
                    echo "🕒 <strong>Timezone:</strong> <span class='user-stat'>" . $userPreferences["timezone"] . "</span><br>";
                    echo "</div>";

                    echo "<h4 style='color: #ec4899; margin: 1.5rem 0 1rem 0;'>🔔 Notification Settings</h4>";
                    echo "<div style='background: rgba(255, 255, 255, 0.8); padding: 1rem; border-radius: 10px;'>";
                    foreach($userPreferences["notifications"] as $type => $enabled) {
                        $icon = $type === "email" ? "📧" : ($type === "browser" ? "🖥️" : "📱");
                        echo $icon . " <strong>" . ucfirst($type) . ":</strong> ";
                        echo ($enabled ? "<span style='color: #10b981;'>✅ Enabled</span>" : "<span style='color: #ef4444;'>❌ Disabled</span>") . "<br>";
                    }
                    echo "</div>";

                    echo "<h4 style='color: #ec4899; margin: 1.5rem 0 1rem 0;'>🔒 Privacy Controls</h4>";
                    echo "<div style='background: rgba(255, 255, 255, 0.8); padding: 1rem; border-radius: 10px;'>";
                    foreach($userPreferences["privacy"] as $setting => $value) {
                        $label = ucwords(str_replace(['Visibility', 'Email', 'LastSeen'], ['Visibility', 'Email', 'Last Seen'], $setting));
                        echo "🔒 <strong>" . $label . ":</strong> <span class='user-stat'>" . ucfirst($value) . "</span><br>";
                    }
                    echo "</div>";
                    echo "</div>";

                    echo "<div style='border-bottom: 2px solid #4a5568; padding-bottom: 1rem; margin: 2rem 0 1.5rem 0;'>";
                    echo "<h3 style='color: #fbbf24; margin-bottom: 1rem;'>📊 ACCOUNT STATISTICS</h3>";
                    echo "</div>";

                    echo "<div style='background: linear-gradient(135deg, #8b5cf6, #7c3aed); padding: 2rem; border-radius: 15px; margin: 1rem 0; color: white;'>";
                    echo "<h4 style='margin-bottom: 1.5rem; font-size: 1.2rem;'>📈 Your Activity Summary</h4>";
                    echo "<div style='display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 1rem;'>";
                    
                    echo "<div style='background: rgba(255, 255, 255, 0.2); padding: 1rem; border-radius: 10px; text-align: center;'>";
                    echo "<div style='font-size: 2rem; margin-bottom: 0.5rem;'>🔐</div>";
                    echo "<div style='font-size: 1.5rem; font-weight: bold;'>" . $accountStats["totalLogins"] . "</div>";
                    echo "<div style='font-size: 0.9rem; opacity: 0.9;'>Total Logins</div>";
                    echo "</div>";

                    echo "<div style='background: rgba(255, 255, 255, 0.2); padding: 1rem; border-radius: 10px; text-align: center;'>";
                    echo "<div style='font-size: 2rem; margin-bottom: 0.5rem;'>👀</div>";
                    echo "<div style='font-size: 1.5rem; font-weight: bold;'>" . $accountStats["profileViews"] . "</div>";
                    echo "<div style='font-size: 0.9rem; opacity: 0.9;'>Profile Views</div>";
                    echo "</div>";

                    echo "<div style='background: rgba(255, 255, 255, 0.2); padding: 1rem; border-radius: 10px; text-align: center;'>";
                    echo "<div style='font-size: 2rem; margin-bottom: 0.5rem;'>🚀</div>";
                    echo "<div style='font-size: 1.5rem; font-weight: bold;'>" . $accountStats["projectsCreated"] . "</div>";
                    echo "<div style='font-size: 0.9rem; opacity: 0.9;'>Projects Created</div>";
                    echo "</div>";

                    echo "<div style='background: rgba(255, 255, 255, 0.2); padding: 1rem; border-radius: 10px; text-align: center;'>";
                    echo "<div style='font-size: 2rem; margin-bottom: 0.5rem;'>📅</div>";
                    echo "<div style='font-size: 1.5rem; font-weight: bold;'>" . $accountStats["accountAge"] . "</div>";
                    echo "<div style='font-size: 0.9rem; opacity: 0.9;'>Days Active</div>";
                    echo "</div>";

                    echo "</div>";
                    echo "</div>";

                    echo "<div style='border-bottom: 2px solid #4a5568; padding-bottom: 1rem; margin: 2rem 0 1.5rem 0;'>";
                    echo "<h3 style='color: #fbbf24; margin-bottom: 1rem;'>📋 RECENT ACTIVITY HISTORY</h3>";
                    echo "</div>";

                    echo "<div style='background: rgba(59, 130, 246, 0.1); padding: 2rem; border-radius: 15px; margin: 1rem 0; border-left: 4px solid #3b82f6;'>";
                    echo "<h4 style='color: #3b82f6; margin-bottom: 1rem;'>🔄 Latest Activities</h4>";
                    
                    foreach($recentActivities as $index => $activity) {
                        $timeAgo = time() - strtotime($activity["timestamp"]);
                        $timeDisplay = "";
                        
                        if($timeAgo < 3600) {
                            $timeDisplay = floor($timeAgo / 60) . " minutes ago";
                        } elseif($timeAgo < 86400) {
                            $timeDisplay = floor($timeAgo / 3600) . " hours ago";
                        } else {
                            $timeDisplay = floor($timeAgo / 86400) . " days ago";
                        }

                        $actionIcon = "";
                        switch($activity["action"]) {
                            case "Login": $actionIcon = "🔐"; break;
                            case "Profile Updated": $actionIcon = "✏️"; break;
                            case "Password Changed": $actionIcon = "🔑"; break;
                            case "Email Verified": $actionIcon = "✅"; break;
                            default: $actionIcon = "📝";
                        }

                        echo "<div style='background: rgba(255, 255, 255, 0.8); padding: 1rem; border-radius: 10px; margin: 0.5rem 0; border-left: 3px solid #3b82f6;'>";
                        echo "<div style='display: flex; justify-content: space-between; align-items: center;'>";
                        echo "<div>";
                        echo "<strong style='color: #374151;'>" . $actionIcon . " " . $activity["action"] . "</strong><br>";
                        echo "<span style='color: #6b7280; font-size: 0.9rem;'>" . $activity["details"] . "</span><br>";
                        echo "<span style='color: #9ca3af; font-size: 0.8rem;'>IP: " . $activity["ip"] . "</span>";
                        echo "</div>";
                        echo "<div style='text-align: right; color: #6b7280; font-size: 0.9rem;'>";
                        echo "<div>" . date("M j, Y", strtotime($activity["timestamp"])) . "</div>";
                        echo "<div>" . date("g:i A", strtotime($activity["timestamp"])) . "</div>";
                        echo "<div style='color: #3b82f6; font-weight: 600;'>" . $timeDisplay . "</div>";
                        echo "</div>";
                        echo "</div></div>";
                    }
                    echo "</div>";

                    echo "<div style='background: linear-gradient(135deg, #10b981, #059669); padding: 2rem; border-radius: 15px; margin: 2rem 0; color: white;'>";
                    echo "<h4 style='margin-bottom: 1rem; font-size: 1.2rem;'>⚡ Quick Actions</h4>";
                    echo "<div style='display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;'>";
                    
                    $quickActions = [
                        ["icon" => "✏️", "title" => "Edit Profile", "desc" => "Update your information"],
                        ["icon" => "🔑", "title" => "Change Password", "desc" => "Update your password"],
                        ["icon" => "🔔", "title" => "Notification Settings", "desc" => "Manage alerts"],
                        ["icon" => "🔒", "title" => "Privacy Settings", "desc" => "Control your visibility"],
                        ["icon" => "📊", "title" => "View Analytics", "desc" => "See your activity data"],
                        ["icon" => "📱", "title" => "2FA Setup", "desc" => "Enable two-factor auth"]
                    ];

                    foreach($quickActions as $action) {
                        echo "<div style='background: rgba(255, 255, 255, 0.2); padding: 1rem; border-radius: 10px; text-align: center; cursor: pointer; transition: all 0.3s ease;'>";
                        echo "<div style='font-size: 1.5rem; margin-bottom: 0.5rem;'>" . $action["icon"] . "</div>";
                        echo "<div style='font-weight: bold; margin-bottom: 0.25rem;'>" . $action["title"] . "</div>";
                        echo "<div style='font-size: 0.9rem; opacity: 0.9;'>" . $action["desc"] . "</div>";
                        echo "</div>";
                    }
                    
                    echo "</div>";
                    echo "</div>";
                    ?>
                </div>
            </div>

            <div class="project-demo">
                <h2 style="color: #ec4899; margin-bottom: 1.5rem;">💻 Dashboard Implementation 🌸</h2>
                <div class="code-block">
<pre><code><span class="code-comment">// 1. USER DATA MANAGEMENT - Storing user information</span>
$currentUser = [
    "id" => 1001,
    "username" => "hermoinevehlle_jacinto",
    "email" => "hermoinevehlle.jacinto@student.edu",
    "firstName" => "Hermoinevehlle",
    "lastName" => "Cristobal Jacinto",
    "section" => "BSIT-204",
    "memberSince" => "2025-01-15",
    "lastLogin" => "2025-09-19 08:30:00",
    "bio" => "A passionate beginner in programming...",
    "isActive" => true,
    "emailVerified" => true
];

<span class="code-comment">// 2. USER PREFERENCES - Settings and customization</span>
$userPreferences = [
    "theme" => "cute-pink",
    "notifications" => [
        "email" => true,
        "browser" => true,
        "mobile" => false
    ],
    "privacy" => [
        "profileVisibility" => "public",
        "showEmail" => false,
        "showLastSeen" => true
    ],
    "language" => "English",
    "timezone" => "Asia/Manila"
];

<span class="code-comment">// 3. ACTIVITY TRACKING - User actions and history</span>
$recentActivities = [
    [
        "action" => "Profile Updated",
        "timestamp" => "2025-09-19 08:15:00",
        "details" => "Updated bio information",
        "ip" => "192.168.1.100"
    ],
    [
        "action" => "Login",
        "timestamp" => "2025-09-19 08:00:00",
        "details" => "Successful login from desktop",
        "ip" => "192.168.1.100"
    ]
];

<span class="code-comment">// 4. DYNAMIC DASHBOARD - Real-time data display</span>
foreach($recentActivities as $activity) {
    $timeAgo = time() - strtotime($activity["timestamp"]);
    echo $activity["action"] . " - " . $activity["details"];
    echo " (" . calculateTimeAgo($timeAgo) . ")";
}

<span class="code-comment">// 5. USER INTERFACE FUNCTIONS - Dashboard functionality</span>
function displayUserProfile($user) {
    echo "Welcome, " . $user["firstName"] . " " . $user["lastName"];
    echo "Member since: " . date("F Y", strtotime($user["memberSince"]));
}

function updateUserPreferences($userId, $preferences) {
    // Update user preferences in database
    // Return success/failure status
}

function trackUserActivity($userId, $action, $details) {
    // Log user activity for dashboard display
    // Store in activity history
}</code></pre>
                </div>
            </div>

            <div class="project-demo">
                <h2 style="color: #ec4899; margin-bottom: 1.5rem;">🎓 What I Learned 🌺</h2>
                <div style="color: #374151; line-height: 1.8;">
                    <div class="dashboard-card">
                        <h3 style="color: #ec4899; margin-bottom: 1rem;">💡 Key Learning Outcomes:</h3>
                        <ul>
                            <li><strong>User Experience Design:</strong> Creating intuitive interfaces for data management</li>
                            <li><strong>Data Organization:</strong> Structuring user information, preferences, and activity logs</li>
                            <li><strong>Session Management:</strong> Handling user authentication and data persistence</li>
                            <li><strong>Security Considerations:</strong> Implementing safe data display and privacy controls</li>
                            <li><strong>Dynamic Content:</strong> Real-time dashboard updates and personalization</li>
                            <li><strong>Activity Tracking:</strong> Monitoring and displaying user interactions</li>
                        </ul>
                    </div>
                    
                    <div class="dashboard-card">
                        <h3 style="color: #ec4899; margin-bottom: 1rem;">🚀 Technical Skills Developed:</h3>
                        <ul>
                            <li>User interface design and implementation</li>
                            <li>Data visualization and statistics presentation</li>
                            <li>Time-based data processing and display</li>
                            <li>Responsive dashboard layout design</li>
                            <li>User preference management systems</li>
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
            <p>&copy; 2025 Hermoinevehlle Cristobal Jacinto | BSIT-204 | PHP User Dashboard Project</p>
        </div>
    </footer>
</body>
</html>