🧠 AI-Based Intelligent Crowd Monitoring & People Analytics System
# crowd-counting-It-s-dashboard
An intelligent real-time Crowd Monitoring System built using YOLOv8, OpenCV, Python, MySQL, and PHP dashboard 🌐.  This system detects, tracks, and counts people using a webcam or CCTV feed and displays live analytics on a web dashboard 🤖📊.

📄 Abstract

This project presents a research-oriented intelligent crowd monitoring system 🧠 designed for real-time person detection and analytics. The system integrates deep learning-based object detection 🎯 with multi-object tracking 🔄 to compute live crowd metrics, session maximum occupancy 📈, and unique individual counts 👥. Data is persistently stored in a relational database 🗄️ and visualized through a dynamic web dashboard 📊.

🎯 Research Objectives

• Real-time crowd detection using deep learning 🤖
• Reduce false positives using confidence and spatial filtering 🎯
• Implement multi-object tracking for identity persistence 🔄
• Compute session-based peak occupancy metrics 📈
• Store and visualize analytics data via web dashboard 🌐

⚙️ Methodology

Video Acquisition from webcam or CCTV RTSP stream 🎥

Person detection using YOLOv8 model (COCO dataset) 🧠

Multi-object tracking using ByteTrack algorithm 🔍

Crowd metrics computation (Current Count, Session Max, Unique Count) 📊

Data logging into MySQL database 🗄️

Visualization via PHP-based live dashboard 🌐

🏗 System Architecture

Camera Input 🎥 → YOLOv8 Detection 🤖 → ByteTrack Tracking 🔄 → Crowd Metrics Engine 📊 → MySQL Database 🗄️ → PHP Dashboard 🌐

🛠 Technology Stack

• Python (AI Processing) 🐍
• OpenCV (Video Handling) 🎥
• YOLOv8 (Object Detection) 🎯
• ByteTrack (Tracking) 🔄
• MySQL (Database) 🗄️
• PHP (Web Dashboard) 🌐
• XAMPP (Local Server) 🖥️

🗄 Database Schema

Table: people_log

id (INT, Primary Key) 🔑

time (VARCHAR) ⏱

current_count (INT) 👥

total_detected (INT) 📊

🌍 Applications

• Smart City Surveillance 🏙
• Hospital Occupancy Monitoring 🏥
• Event Crowd Management 🎪
• Campus & Highway Monitoring 🛣
• Smart Building Automation 🏢

🚀 Future Research Scope

• Entry/Exit Line Counting 🚪
• Heatmap Density Visualization 🔥
• Overcrowding Risk Prediction ⚠️
• Edge AI Deployment (Jetson) 🧩
• Cloud-based Analytics ☁️

👨‍💻 Author

Rishav Kumar
AI & Full Stack Developer 💻
Specialization: Computer Vision & Intelligent Systems 🤖
