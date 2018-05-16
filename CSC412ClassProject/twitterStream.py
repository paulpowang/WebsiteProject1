import tweepy

consumer_key = '8QZIhisJeDK6yBgfrBLnDheAk'
consumer_key_secret = 'XUnXb9eXT1g4rmuuiePo5BDoyrytTCtXsnK8FkA6fVK3YU4Vaz'

access_token = '67445998-Qhnd0XgUoaRZ5YHib6AqBi44uP2OQ8TrgcqDW2SK2'
access_token_secret= 'Skgdz6i8i0mtCIbGvA1GhNf4Zpjny5m6wH1WSHELBUDID'

class TweetListener(tweepy.StreamListener):
    def on_status(self, status):
        print('Tweet text: ' + status.text)
        return True

    def on_error(self, status_code):
        print('Got an error with status code: ' + str(status_code))
        return True

    def on_timeout(self):
        print('Timeout.. ')
        return True

if __name__ == '__main__':
    listener = TweetListener()
    auth = tweepy.OAuthHandler(consumer_key, consumer_key_secret)
    auth.set_access_token(access_token, access_token_secret)

    stream = tweepy.Stream(auth, listener)
    stream.filter (follow =[], track=['#SFGiants', '#Athletics'])

 
