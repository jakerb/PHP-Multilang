# [Simple PHP Multi-Language](#)

Simple PHP Multi-Language is a dead simply way of translating your projects without using a database. 

##Why did I make this?

After working on a number of projects that needed translating into both French and German from English,
the handover and translation process took extremely long and often became confusing, especially when
the english version we're tweaked and other languages needed updating again (terrible for revising).

##How does it work?

Simply by including the multilang class in your projects, you can quickly plug a translation file into your project
and get busy being multilingual.

The translate file is set out exactly the same as a CSS file, for simplicity, each country is differenciated by its
language prefix/code (DE, FR, EN) and can be set a number of different ways (see examples).

```
@welcome_message {
	
}

```


##How to translate 

All you need to do is edit the "translate.lang" file and start creating language ID's, this is done by naming each ID 
starting with "@". You then simply add the languages you wish to support by adding the prefix:

```
@welcome_message {
	en: "hello";
	fr: "bonjour";
}
```

and echo it out in php by using the "say" function:


```
<?=$var->say("welcome_message");?>
```

You can add as many translation as you wish to your translations ID's.


* Twitter: [@jakebown1](http://twitter.com/jakebown1)



## Updates
Please let me know your thoughts and suggestions to make PHP-Multilang better for everyone! 
