from tkinter import *
import webbrowser
import urllib.parse

root = Tk()
root['bg'] = '#fafafa'
root.title('Try me to search something')
root.geometry('300x160')
search_engine = StringVar()
search_engine.set('google')


def search(event=None):
    if len(text_field.get()) <= 2:
        return

    webbrowser.open("https://www." + search_engine.get() + ".com/search?q=" + urllib.parse.quote(text_field.get()))


frame = Frame(root, bg='#fafafa')
frame.place(relwidth=0.8, relx=0.1, relheight=0.9, rely=0.05)

Label(frame, text='Search', bg='#fafafa', fg='#000', font="Times 30 bold italic underline").pack()

text_field = Entry(frame, width=50, bg='#fafafa', fg='#000')
text_field.bind('<Return>', search)
text_field.pack()

btn = Button(frame, text='Go!', width=10, highlightbackground='#fafafa', activeforeground='#E06249', command=search)
btn.pack()

Radiobutton(frame, text='Google', value='google', variable=search_engine, bg='#fafafa', fg='#000').pack()
Radiobutton(frame, text='Bing', value='bing', variable=search_engine, bg='#fafafa', fg='#000').pack()

root.wm_attributes('-topmost', True)
root.mainloop()

