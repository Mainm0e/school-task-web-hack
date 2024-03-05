# Brute Force

## What is Brute Force

Brute force is a straightforward and exhaustive approach to solving a problem or finding a solution. In the context of computer science and cybersecurity, brute force refers to a method of trying all possible combinations or permutations of a solution until the correct one is found. This is often used in the following contexts:

### Example

**Password cracking:** In cybersecurity, attackers may use brute force attacks to gain unauthorized access to a system by systematically trying all possible passwords until the correct one is discovered.

## DVWA Attack: Low LV

> On the DVWA site, there is a Brute Force option in the navigation bar for learning how to gain access from the login page.

In this case, we are going to use Burp Suite to send a GET request with different passwords to gain access. First, we open the browser from Burp Suite and navigate to our target page, the "DVWA brute force page."

Next, in Burp Suite, go to the Proxy tab and then Intercept. If intercept is off, click on it once to turn it on. It will now capture every request made in that browser.

However, before proceeding, we need to determine the target username. The target username is **admin**. Now, attempt to log in with the username: admin and any password (for now).

All requests will be saved in the HTTP history. Locate the login request, right-click on it, and send it to Intruder.

In Intruder, a new tab will be available for that request. We are going to use the attack type: **Sniper** for this request.

In this case, the login request is very weak; it sends a GET request with the login value: **/vulnerabilities/brute/?username=admin&password=pwd&Login=Login.** Now, highlight the password value in the path and press the Add button on the right. It will replace the password value with "§". Now, you can click on the Attack button at the top right.

Now, you can navigate to the "Payloads" tab, and in the payload settings, you can add numerous passwords to attempt to find the correct one. Alternatively, you can load a password file. For example, click on "Load..." and select a word file from /usr/share/wordlists, such as john.lst.

After loading the word file, you can initiate the attack by pressing the "Start Attack" button. This will commence the process of sending login requests with different passwords.

Using the attack window, it will display every request with different passwords. To identify the correct password, look for a request whose length differs from the others. In this case, the payload "password" will have a larger length compared to the others. Check the response and search for a message indicating success, such as "Welcome to the password-protected area, admin."

Now you get right password for DVWA in Low Lv.