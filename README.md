

<h1 align="center">Hi 👋, I'm Jeromel Pushparaj</h1>
<h3 align="center">A multidisciplinary Full-Stack developer from Tamil Nadu India</h3>

```php
<?php

declare(strict_types=1);

readonly class Developer
{
    public function __construct(
        public string $name,
        public string $role,
        public array $skills,
        public array $goals,
        public array $hobbies
    ) {}

    public function introduce(): void
    {
        $summary = fn() => <<<TEXT
 Hey there! I'm {$this->name}, a passionate {$this->role} 

 Skills: {$this->list($this->skills)}
 Goals: {$this->list($this->goals)}
 Hobbies: {$this->list($this->hobbies)}

Let's connect and build something awesome together! 
TEXT;

        echo $summary();
    }

    private function list(array $items): string => implode(', ', $items);
}

$jeromel = new Developer(
    name: 'Jeromel Pushparaj',
    role: 'Full Stack Developer',
    skills: ['PHP 8', 'MySQL', 'JavaScript', 'HTML', 'Tailwind CSS', 'Laravel', 'Linux', 'MongoDB'],
    knownStacks: ['MERN', 'LAMP'],
    hobbies: ['Learn CyberSecurity', 'Experimenting with IoT', 'Learning about personal financial'],
    loveNote: ['Jesus is the only way', 'John: 3:16']
);

$jeromel->introduce();

```
<!--- _Last updated on: **<time>2025-05-01 13:28:43</time>**_ --->
<img align="right" alt="Coding" width="400" src="https://miro.medium.com/max/680/0*7Q3yvSIv_t0ioJ-Z.gif"/>
<p align="left"> <img src="https://komarev.com/ghpvc/?username=Jeromel-Pushparaj&label=Profile%20views&color=0e75b6&style=flat" alt="Jeromel Pushparaj" /> </p>

<p><img align="left" src="https://github-readme-stats.vercel.app/api/top-langs?username=Jeromel-Pushparaj&show_icons=true&locale=en&layout=compact" alt="jeormelpushapraj" /></p>
  <img src="https://github-readme-streak-stats.herokuapp.com/?user=Jeromel-Pushparaj">
<p>&nbsp;<img align="center" src="https://github-readme-stats.vercel.app/api?username=Jeromel-Pushparaj&show_icons=true&locale=en" alt="Jeromel Pushparaj" /></p>


