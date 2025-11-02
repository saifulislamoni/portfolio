<?php
class PortfolioModel {
    public function getPortfolioData() {
        return [
            'name' => 'Saiful Islam Oni',
            'title' => 'AI & Machine Learning Enthusiast',
            'about' => 'A final-year student from Computer Science and Engineering at American International University-Bangladesh. I love to work with AI and Machine Learning.',
            'qualifications' => [
                'B.Sc. in Computer Science and Engineering',
                'American International University-Bangladesh'
            ],
            'projects' => [
                [
                    'title' => 'Face Recognition Model',
                    'description' => 'Developed a face recognition model using the ResNet50 pretrained model.'
                ],
                [
                    'title' => 'Travel Management App',
                    'description' => 'Built a travel management application using Java Swing.'
                ],
                [
                    'title' => 'Travel Booking System',
                    'description' => 'Created a complete travel booking system in C#.'
                ],
                [
                    'title' => 'Ride-Sharing Application',
                    'description' => 'Developed a responsive website for a ride-sharing application featuring a booking system.'
                ]
            ],
            'research' => [
                [
                    'title' => 'Diabetic Retinopathy Detection',
                    'description' => 'Trained a lightweight model for detection and classification of Diabetic Retinopathy using EfficientNetB0 with transfer learning.',
                    'conference' => 'Accepted for 2025 INTERNATIONAL CONFERENCE ON INNOVATION AND INTELLIGENCE FOR INFORMATICS, COMPUTING, AND TECHNOLOGIES hosted by University of Bahrain'
                ],
                [
                    'title' => 'Predictive Maintenance Solution',
                    'description' => 'Developed a machine learning-driven solution based on AI4I 2020 dataset for equipment condition classification and failure prognosis.',
                    'conference' => 'Accepted for IEEE 2nd INTERNATIONAL CONFERENCE ON COMPUTING, APPLICATIONS AND SYSTEMS'
                ]
            ],
            'extracurricular' => [
                [
                    'role' => 'Vice President',
                    'organization' => 'Adamjee Cantonment Public School Information and Technology Club'
                ],
                [
                    'role' => 'Joint Secretary',
                    'organization' => 'BAF Shaheen College Dhaka Mathematics Club'
                ],
                [
                    'role' => 'General Member & Researcher',
                    'organization' => 'AIUB Research and Development Club'
                ]
            ]
        ];
    }
}
?>