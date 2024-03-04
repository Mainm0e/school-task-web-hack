# Web Security Assignment

## Task Objectives

Objective
To validate the project you will have to deploy the web platform, find at least 3 vulnerabilities and develop a c99, r57 type shell. Your php shell should allow you to add a file, delete a file, and execute a command.

# Recommended Tools 

[Kali Linux](https://www.kali.org/get-kali/#kali-platforms)

Kali Linux is a specialized Linux distribution designed for penetration testing, ethical hacking, and security auditing. It is developed and maintained by Offensive Security, a leading provider of information security training and certifications. Kali Linux is widely used by cybersecurity professionals, penetration testers, and security enthusiasts to assess and improve the security of computer systems.

[Docker](https://www.docker.com/products/docker-desktop/)

Docker is utilized for hosting DVWA (Damn Vulnerable Web Application), providing a containerized environment for efficient deployment and testing.

[Damn Vulnerable Web Application (DVWA)](https://hub.docker.com/r/vulnerables/web-dvwa/)

DVWA is a purposely insecure web application designed for educational and training purposes. Deploying DVWA allows users to simulate and practice exploiting vulnerabilities in a controlled environment, contributing to practical learning experiences.

By combining these tools, you'll create a secure learning environment to explore, identify, and address vulnerabilities, enhancing your skills in web application security.

# Vulnerabilities

Vulnerabilities refer to weaknesses or flaws in a system's design, implementation, or configuration that could be exploited by attackers to compromise the security of that system. These weaknesses can exist in various components of a system, including software, hardware, network configurations, or even in human behavior. Identifying and addressing vulnerabilities is a crucial aspect of maintaining a secure computing environment.

### Common categories of vulnerabilities include:

**Software Vulnerabilities:** Flaws in the code or design of software applications that can be exploited. Examples include buffer overflows, SQL injection, and cross-site scripting (XSS).

**Hardware Vulnerabilities:** Weaknesses in the design or implementation of computer hardware, such as insecure firmware or hardware configurations.

**Network Vulnerabilities:** Weaknesses in network configurations or protocols, like open ports, unsecured wireless networks, or misconfigured firewalls.

**Human Factor Vulnerabilities:** Weaknesses related to human behavior, including poor password practices, susceptibility to social engineering, and lack of awareness about security best practices.

**Policy and Procedure Vulnerabilities:** Weaknesses in organizational policies or procedures, such as inadequate access controls, lack of regular security audits, or insufficient incident response plans.

### Common Vulnerabilities:

**SQL Injection (SQLi):** Exploiting vulnerabilities in database queries to manipulate or retrieve unauthorized information.

**Cross-Site Scripting (XSS):** Injecting malicious scripts into web pages viewed by other users.

**Cross-Site Request Forgery (CSRF):** Forcing users to perform actions on a website without their consent.

**Buffer Overflow:** Writing more data to a block of memory than it was allocated for, potentially leading to unauthorized code execution.

**Insecure Direct Object References (IDOR):** Accessing or manipulating unauthorized data by exploiting insecure references to objects.

**Security Misconfigurations:** Improperly configured settings, permissions, or defaults that can be exploited by attackers.

**Unvalidated Input:** Failing to properly validate and sanitize user inputs, leading to vulnerabilities like code injection or command injection.

**Weak Passwords:** Use of easily guessable or common passwords that can be exploited through brute force or other attacks.

**Outdated Software:** Running software with known vulnerabilities due to lack of updates or patches.

**Missing Security Updates:** Failure to apply security patches and updates, leaving systems exposed to known vulnerabilities.

It's crucial for organizations and individuals to regularly assess and address vulnerabilities to enhance overall cybersecurity posture and minimize the risk of exploitation. Regular security assessments, vulnerability scanning, and adherence to security best practices are essential components of effective vulnerability management.

> ⚠️ These methods and tools are for educational purposes only, so that you have a better understanding of how to protect against similar vulnerabilities. You must ensure that you do not attempt any exploit-type activity without the explicit permission of the owner of the machine, system or application. Failure to obtain permission risks breaking the law.