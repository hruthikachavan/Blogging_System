-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2025 at 06:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `username`, `post_id`, `comment`, `created_at`) VALUES
(2, 'Hruthika Chavan', 9, 'Hydration is so important!', '2025-03-25 15:16:24'),
(3, 'Hruthika Chavan', 10, 'Mindfulness is life-changing!', '2025-03-25 15:17:24'),
(4, 'Hruthika Chavan', 15, 'How often should we get check-ups', '2025-03-25 15:18:04'),
(5, 'Shraddha Katkar', 3, 'I am adding this to my daily routine!', '2025-03-25 15:19:25'),
(6, 'Shraddha Katkar', 14, 'Prevention is better than cure', '2025-03-25 15:19:49'),
(7, 'Shraddha Katkar', 16, 'Where can I read more about this?', '2025-03-25 15:20:21'),
(8, 'Shraddha Katkar', 11, 'Mental health matters', '2025-03-25 15:20:50'),
(9, 'Shraddha Katkar', 8, 'I am switching to a plant-based diet!', '2025-03-25 15:21:40'),
(10, 'Shraddha Katkar', 21, 'Thank you for the tips these really helped me to reduce my screen time', '2025-03-26 07:02:19'),
(11, 'Naresh', 9, 'great Information!', '2025-09-03 04:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `username`, `title`, `content`, `created_at`, `category`) VALUES
(3, 'Hruthika Chavan', 'Quick Workouts for Busy People', 'In today’s fast-paced world, finding time for exercise can be tough. But the truth is, you don’t need hours in the gym to stay fit. Just 15 minutes of the right workout can make a huge difference.\r\n\r\nStart with jump rope for a couple of minutes to get your heart rate up. It’s a fantastic full-body warm-up that improves endurance. Move on to bodyweight squats, focusing on form to strengthen your legs and glutes. After that, drop down for push-ups—a classic move that builds upper body strength.\r\n\r\nTo target your core, hold a plank for 30 seconds and repeat a few times. Finally, finish with burpees to engage your whole body and burn extra calories. A short but intense workout like this keeps you active and healthy, even on the busiest days.\r\n\r\n', '2025-03-25 14:56:12', 'Fitness & Exercise'),
(4, 'Hruthika Chavan', 'Strength Training vs. Cardio: Which is Better?', 'When it comes to fitness, one common question always comes up: Should you focus on strength training or cardio? The answer isn’t as simple as picking one over the other—it depends on your goals.\r\n\r\nIf you’re looking to burn fat quickly, cardio exercises like running, cycling, or jump rope will help you shed calories fast. But if you want to build muscle and boost metabolism, strength training is the way to go. Lifting weights or doing resistance exercises helps shape your body and keeps you burning calories even at rest.\r\n\r\nThe best approach? A combination of both. Cardio improves endurance and heart health, while strength training builds a strong, toned body. A mix of both will give you the best results in the long run.\r\n\r\n', '2025-03-25 14:57:17', 'Fitness & Exercise'),
(5, 'Hruthika Chavan', 'The Science of Muscle Recovery', 'Many people think working out harder every day leads to better results. But what they often forget is that muscle recovery is just as important as exercise itself.\r\n\r\nWhen you work out, your muscles experience tiny tears. It’s during rest that they repair and grow stronger. That’s why sleep, proper nutrition, and hydration play a crucial role in fitness. Skipping recovery can lead to injuries, fatigue, and even slow progress.\r\n\r\nTo speed up recovery, make sure to stretch after workouts, drink plenty of water, and include enough protein in your diet. Active recovery—like light walking or yoga—also helps keep your body moving without overworking it. Listen to your body, and it will reward you with better performance and strength.\r\n\r\n', '2025-03-25 14:57:38', 'Fitness & Exercise'),
(6, 'Shraddha Katkar', '10 Superfoods for a Healthier Life', 'Eating well doesn’t have to be complicated. Some foods are packed with so many nutrients that they’re called superfoods.\r\n\r\nLeafy greens like spinach and kale are full of vitamins that boost immunity. Berries are rich in antioxidants, helping your skin glow and your brain stay sharp. Nuts and seeds provide healthy fats that support heart health, while salmon is a great source of omega-3s, reducing inflammation in the body.\r\n\r\nBy adding these nutrient-dense foods to your daily meals, you’ll feel more energized and support your long-term health without needing complicated diets.', '2025-03-25 14:58:26', 'Nutrition & Diet'),
(8, 'Shraddha Katkar', 'Plant-Based Diet vs. Keto: Which One is Right for You?', 'Two of the most popular diets today are plant-based eating and the ketogenic (keto) diet. But which one is better?\r\n\r\nA plant-based diet focuses on fruits, vegetables, whole grains, and legumes. It’s great for heart health, lowers cholesterol, and provides plenty of fiber. However, some people may find it hard to get enough protein without animal products.\r\n\r\nThe keto diet, on the other hand, is high in fat, very low in carbs, and focuses on burning fat for energy. It can be great for weight loss and managing blood sugar levels, but it’s not for everyone. Cutting out carbs completely can be challenging, and long-term effects are still debated.\r\n\r\nThe best diet depends on your body and lifestyle. Try experimenting and see what works for you!', '2025-03-25 14:59:32', 'Nutrition & Diet'),
(9, 'Shraddha Katkar', ' The Importance of Hydration', 'Most people don’t drink enough water, even though hydration affects nearly every function of our body.\r\n\r\nWater helps regulate body temperature, keeps skin healthy, and improves digestion. If you’re feeling tired or struggling with headaches, dehydration could be the cause. While eight glasses of water a day is a common recommendation, your needs depend on your activity level and climate.\r\n\r\nA simple way to stay hydrated is to keep a bottle with you at all times and drink whenever you feel thirsty. Adding fruits like lemon or cucumber can make it more enjoyable. Staying hydrated is one of the easiest yet most effective ways to stay healthy.', '2025-03-25 14:59:56', 'Nutrition & Diet'),
(10, 'Sonali Kodmur', 'The Power of Daily Meditation', 'Life can feel overwhelming, but sometimes, just a few minutes of meditation can change everything. Meditation isn’t just about sitting still—it’s about calming your mind and focusing on the present moment.\r\n\r\nStudies show that daily meditation reduces stress, improves focus, and even lowers blood pressure. You don’t need an hour-long session; even five minutes a day can make a difference. Try closing your eyes, taking deep breaths, and letting go of distractions.\r\n\r\nWith practice, you’ll notice more clarity, patience, and emotional balance. And the best part? You can do it anywhere—before work, during a lunch break, or right before bed.', '2025-03-25 15:03:43', 'Mental Health & Wellness'),
(11, 'Sonali Kodmur', 'How to Deal with Anxiety in a Healthy Way', 'Anxiety is something many people struggle with, but ignoring it doesn’t make it go away. Instead, learning how to manage it is key.\r\n\r\nOne of the best ways to reduce anxiety is through exercise. Physical activity releases endorphins that help you feel more relaxed. Another great tool is deep breathing. Taking slow, deep breaths tells your body to calm down.\r\n\r\nIt’s also important to talk about your feelings. Whether it’s with a close friend, a therapist, or even a journal, expressing emotions can prevent them from building up. Anxiety is tough, but with the right coping mechanisms, it doesn’t have to control your life.', '2025-03-25 15:04:04', 'Mental Health & Wellness'),
(12, 'Sonali Kodmur', 'The Importance of Good Sleep for Mental Health', 'Sleep isn’t just about rest—it’s about recovery. When you don’t get enough sleep, your stress levels increase, focus decreases, and emotions become harder to control.\r\n\r\nA good night’s sleep improves mood, memory, and even strengthens your immune system. To improve your sleep quality, try setting a consistent bedtime, avoiding screens before bed, and keeping your room dark and quiet.\r\n\r\nIf you’re struggling with stress or anxiety, prioritizing sleep can make a huge difference. Treat it as an essential part of self-care, just like eating healthy or exercising.', '2025-03-25 15:04:24', 'Mental Health & Wellness'),
(13, 'Anushkaa Pawar', 'How to Strengthen Your Immune System Naturally', 'Your immune system is your body’s defense against illness, and keeping it strong is essential for long-term health.\r\n\r\nSimple habits like eating vitamin-rich foods, staying active, and getting enough sleep can improve immunity. Citrus fruits, leafy greens, and nuts provide essential nutrients, while regular exercise keeps your body in balance.\r\n\r\nHydration and stress management also play a big role. Chronic stress weakens the immune system, so practicing relaxation techniques can help your body fight infections more effectively.\r\n\r\n', '2025-03-25 15:05:33', 'Disease Prevention & Awareness'),
(14, 'Anushkaa Pawar', 'Common Signs of Vitamin Deficiency', 'Many people feel tired, weak, or have frequent colds but don’t realize they may be lacking essential vitamins.\r\n\r\nFor example, low vitamin D can cause fatigue and bone pain, while a lack of iron can lead to dizziness and weakness. Vitamin B12 deficiency often results in memory issues and numbness in the hands or feet.\r\n\r\nEating a balanced diet full of fruits, vegetables, lean proteins, and whole grains helps prevent deficiencies. If you suspect a deficiency, getting a simple blood test can provide answers.', '2025-03-25 15:05:57', 'Disease Prevention & Awareness'),
(15, 'Anushkaa Pawar', 'Why Regular Health Checkups Matter', 'Many people avoid going to the doctor unless they feel sick, but preventative checkups can catch health problems before they become serious.\r\n\r\nRoutine tests like blood pressure checks, cholesterol screenings, and cancer screenings help detect issues early. Early detection often means easier treatment and better outcomes.\r\n\r\nMaking time for a yearly checkup is one of the simplest ways to take control of your health. It’s always better to be proactive than reactive when it comes to disease prevention.', '2025-03-25 15:06:15', 'Disease Prevention & Awareness'),
(16, 'onkar chavan', 'The Latest Breakthroughs in Cancer Research', 'Cancer treatment has come a long way, and recent breakthroughs are offering new hope. Scientists are developing personalized medicine that targets cancer cells based on an individual’s genetic makeup.\r\n\r\nAnother exciting advancement is immunotherapy, which helps the body’s immune system fight cancer more effectively. Unlike chemotherapy, which attacks all rapidly growing cells, immunotherapy is more targeted and has fewer side effects.\r\n\r\nWith ongoing research, cancer treatments are becoming more effective, improving survival rates and quality of life for patients worldwide.\r\n\r\n', '2025-03-25 15:07:48', 'Medical News & Research'),
(17, 'onkar chavan', 'The Future of AI in Healthcare', 'Artificial Intelligence (AI) is transforming medicine in ways we never imagined. From predicting diseases before symptoms appear to assisting in surgeries, AI is improving healthcare accuracy and efficiency.\r\n\r\nFor example, AI-powered algorithms can analyze X-rays and MRIs faster than humans, helping doctors detect issues sooner. AI is also being used in chatbots and virtual assistants to answer health-related questions quickly.\r\n\r\nWhile AI won’t replace doctors, it will continue to revolutionize healthcare, making diagnoses faster and treatments more precise.', '2025-03-25 15:08:07', 'Medical News & Research'),
(18, 'onkar chavan', ' The Rise of Telemedicine', 'In recent years, virtual doctor visits have become more common, offering patients convenient access to healthcare.\r\n\r\nTelemedicine allows people to consult doctors from home, saving time and reducing the risk of exposure to illnesses in clinics. It’s especially helpful for those in remote areas or with mobility issues.\r\n\r\nAs technology improves, telemedicine will continue to expand, making healthcare more accessible to everyone.', '2025-03-25 15:08:36', 'Medical News & Research'),
(19, 'Bhakti Katkar', 'Simple Ways to Reduce Stress Every Day', 'Stress is unavoidable, but how you handle it makes all the difference.\r\n\r\nStart by taking short breaks during the day, even if it’s just five minutes. Deep breathing exercises, listening to music, or stepping outside can instantly lower stress levels.\r\n\r\nAnother powerful tool is gratitude. Writing down three things you’re grateful for every day shifts your focus from stress to positivity. Small changes like these add up and help you maintain balance in daily life.', '2025-03-25 15:09:21', 'Personal Health & Self-Care'),
(20, 'Bhakti Katkar', 'How to Build a Healthy Morning Routine', 'A strong morning routine sets the tone for the rest of your day.\r\n\r\nStart with hydration—drinking water first thing in the morning helps wake up your body. Then, try a quick stretch or light exercise to get the blood flowing.\r\n\r\nTaking a few minutes for mindfulness or journaling can help clear your mind and prepare you for the day ahead. Whether it’s a simple skincare routine or making a healthy breakfast, starting your day with intention makes all the difference.\r\n\r\n', '2025-03-25 15:09:44', 'Personal Health & Self-Care'),
(21, 'Bhakti Katkar', 'Digital Detox: Reclaiming Your Time and Mental Space', 'In todays world, we are constantly bombarded with notifications, emails, and social media updates. While technology keeps us connected, it can also leave us feeling drained, distracted, and overwhelmed.\r\n\r\nA digital detox—taking a break from screens—can improve focus, reduce stress, and enhance sleep quality. Try setting screen-free hours, turning off unnecessary notifications, or spending more time outdoors. By creating balance, you can regain control of your time and mental well-being. Your mind deserves a break too.', '2025-03-25 15:14:15', 'Personal Health & Self-Care');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(4, 'Hruthika Chavan', 'hruthikachavan295@gmail.com', '12345'),
(5, 'Shraddha Katkar', 'shraddha@gmail.com', '7777'),
(6, 'onkar chavan', 'onkar@gmail.com', '1111'),
(7, 'Bhakti Katkar', 'bhakti@gmail.com', '6666'),
(8, 'Sonali Kodmur', 'Sonali@gmail.com', '9096'),
(9, 'Anushkaa Pawar', 'anushkaa@gmail.com', '9096'),
(10, 'Amruta', 'a@gmail.com', '133'),
(11, 'Naresh', 'nareshvchavan@gmail.com', '898989');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
