

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
<h1 align="center"> </h1>
<hr>
   <img src="https://komarev.com/ghpvc/?username=Jeromel-Pushparaj&label=Profile%20views&color=0e75b6&style=flat&theme=github_dark" alt="Jeromel Pushparaj" /> 
   <p align="center">.
   <img align="center" src="https://github-readme-stats.vercel.app/api/top-langs?username=Jeromel-Pushparaj&show_icons=true&locale=en&layout=compact&theme=github_dark" alt="jeormelpushapraj" /> 
       </p>
<p align="center"> 
    <img src="https://github-readme-stats.vercel.app/api?username=Jeromel-Pushparaj&show_icons=true&locale=en&theme=github_dark" alt="Jeromel Pushparaj" />
    <img src="https://github-readme-streak-stats.herokuapp.com/?user=Jeromel-Pushparaj&theme=github-dark-blue">
</p>
<hr>
<p align="center"><i align="center">
 Programming is art, that art tells lot about me by my repos, <time>23 June 2025<!---23-06-2025 00:06:37---></time>.
 </i>
 </p>

