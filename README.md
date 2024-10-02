## Overview

This project focuses on developing an Intrusion Detection and Prevention System (IDPS) specifically designed to detect and block SQL injection attacks. SQL injection is a common web security vulnerability that allows attackers to interfere with the queries that an application makes to its database. Our solution implements a hybrid approach to enhance the accuracy of threat detection.

## Features

- **Intrusion Detection and Prevention:** The system detects and blocks malicious SQL injection attempts in real-time.
- **Hybrid Detection Models:** Utilizes both Signature-Based and Anomaly-Based Detection Models for improved detection accuracy:
  - **Signature-Based Detection:** Identifies known attack patterns and signatures.
  - **Anomaly-Based Detection:** Detects unusual behaviors that may indicate a potential SQL injection attack.
- **Detailed Attacker Information Storage:** Mechanisms are in place to retrieve and store detailed information about attackers, which supports future threat analysis and forensics.
