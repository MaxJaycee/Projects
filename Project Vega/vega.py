import pyttsx3
import datetime
import speech_recognition as sr
import wikipedia
import pyjokes
import webbrowser
import os


engine = pyttsx3.init('sapi5')
voices = engine.getProperty('voices')
engine.setProperty('voice', voices[0].id) 

def speak(audio):
    engine.say(audio)
    engine.runAndWait()
def wishMe():
    hour = int(datetime.datetime.now().hour)
    if hour>=0 and hour<12:
        speak("good morning")

    elif hour>=12 and hour<18:
        speak("good afternoon")

    else:
        speak("good evening")

    speak("I am Vega, your personal assistant at your service") 

def takeCommand():
    #It takes microphone input from the user and returns string output

    r = sr.Recognizer()
    with sr.Microphone() as source:
        print("Listening...")
        speak("Speak.")
        audio = r.listen(source)

    try:
        print("Recognizing...")  
        speak("Recognising the input")  
        query = r.recognize_google(audio, language='en-in') #Using google for voice recognition.
        print(f"User said: {query}\n")  #User query will be printed.

    except Exception as e:
        print(e)    
        print("Say that again please...")   #Say that again will be printed in case of improper voice 
        speak("Say that again, please.")
        return "None" #None string will be returned
    return query


if __name__ == "__main__":
    wishMe()
    while True:
        query = takeCommand().lower()

        if 'search' in query:  #if wikipedia found in the query then this block will be executed
            speak('Searching Wikipedia...')
            query = query.replace("search","")
            results = wikipedia.summary(query, sentences=5) 
            speak("According to Wikipedia")
            print(results)
            speak(results)    

        elif 'how are you' in query:
            speak("I am fine, Thank you")
            speak("How are you?")
 
        elif 'what is your name' in query:
            speak("My name is Vega, and i love it.")

        elif 'can i change your name' in query:
            speak("no, not at all. it was given to me by my favorite")

        elif 'fine' in query or "good" in query:
            speak("It's good to know that your fine")

        elif "who made you" in query or "who created you" in query or "who develped you" in query: 
            speak("I was developed by the efforts of my developing team.")

        elif "who i am" in query:
            speak("If you talk then definately your human.")
 
        elif "why you came to world" in query or "why you were made" in query:
            speak("To ease your work load. further It's a secret")

        elif "who are you" in query:
            speak("I am your virtual assistant created by my hard working developers.")

        elif 'youtube' in query:
            speak("opening youtube...")
            webbrowser.open("http://in.youtube.com/")   
            break 

        elif 'browser' in query:
            speak("opening google...")
            webbrowser.open("https://www.google.co.in/")
            break

        elif 'blackboard' in query:
            speak("opening blackboard...")
            webbrowser.open("https://cuchd.blackboard.com/")
            break

        elif 'u i m s' in query:
            speak("opening u i m s...")
            webbrowser.open("https://uims.cuchd.in/uims/") 
            break

        elif 'microsoft' in query:
            speak("opening microsoft...")
            webbrowser.open("https://www.microsoft.com/en-in")
            break

        elif 'apple' in query:
            speak("opening apple...")
            webbrowser.open("https://www.apple.com")
            break

        elif 'tesla' in query:
            speak("opening tesla...")
            webbrowser.open("https://www.tesla.com/")
            break

        elif 'google drive' in query:
            speak("opening drive...")
            webbrowser.open("www.drive.google.com")
            break

        elif 'amazon' in query:
            speak("opening amazon...")
            webbrowser.open("http://www.amazon.in/shop_online")
            break

        elif 'space x' in query:
            speak("opening space x...")
            webbrowser.open("https://www.spacex.com/")
            brea

        elif 'gmail' in query:
            speak("opening gmail...")
            webbrowser.open("https://mail.google.com/mail/")
            break

        elif 'facebook' in query or 'open f b' in query:
            speak("opening facebook...")
            webbrowser.open("https://www.facebook.com")   
            break 

        elif 'instagram' in query or 'open insta' in query:
            speak("opening instagram...")
            webbrowser.open("https://www.instagram.com/?hl=en") 
            break   

        elif 'wikipedia' in query:
            speak("opening wikipedia...")
            webbrowser.open("https://www.wikipedia.org")   
            break  

        elif 'joke' in query:
            speak("Here is a joke for you...")
            speak(pyjokes.get_joke())

        elif 'play music' in query:
            speak("playing music...")
            music_dir = 'E:\\Song Bird\\English songs'
            songs = os.listdir(music_dir)
            print(songs)    
            random=os.startfile(os.path.join(music_dir, songs[0]))

        elif 'time' in query:
            strTime = datetime.datetime.now().strftime("%H:%M:%S")    
            speak(f"Sir, the time is {strTime}")

        elif 'exit' in query  or 'bye' in query or 'close' in query:
            speak("Thanks for giving me your time.")
            exit()

        else :
            speak("Application not available.")