## What is Web Shell

A web shell is a type of malicious script or program that hackers deploy on web servers to gain remote access and control over the server. Web shells are typically written in scripting languages like PHP, ASP, or JSP, and they provide an interface for attackers to execute commands, upload/download files, manipulate databases, and perform various other actions on the compromised server.

## Web Interface Shell


Deploy the web interface shell to the server.

![example](/image/upload-shell.jpg)

Navigate to the specified directory.

Within the web shell, there is an input field allowing execution of shell commands. For instance, type "ls" to view all files in the directory, "touch example.txt" to create a file named example.txt, or "rm example.txt" to delete example.txt.
![example](/image/example-ls.jpg)
![example](/image/show-all-file-in-director.jpg)

#### Adding Files

You can add a file by entering the file name into the filename input field. Then, add the file content in the textbox and press "create" to generate the file with the provided content.

![example](/image/create-file.jpg)
![example](/image/suc-adding-file.jpg)