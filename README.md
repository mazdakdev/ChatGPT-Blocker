ChatGPT-Blocker
================
ChatGPT-Blocker is a simple wordpress plugin to block ChatGPT from crawling your website and learning from it.
it just simply appends some roles announced by OpenAI to the robots.txt file.

```
User-agent: GPTBot
Disallow: /
```

How to Install
===============
you just need to download the `.zip` file from the relases section, and upload it through your wordpress site plugins section.
then activate it.

to check if it's working you can directly check your robots.txt `https://your-site.com/robots.txt`.
if those lines above were appended to this file, then you would be good to go.

Contributions
==============
Feel free to give your opinion.
