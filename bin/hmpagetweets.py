import json
import tweepy
import pymongo


consumer_key = 'vy39tPuHppTh4psfX45Ng';
consumer_secret = 'f6ZaY8gTWUlzwXGx3kmLImylnLKLgigjMtZPYOqXvEM';
user_token = '1447264950-fTpl4rxLzrmJlm3q3Fy6USdLG1ytoUjkPteSzhL';
user_secret = 'uFUnHiWeSj0H1YdKscpdohHYprUqBXqL3c0tuhBy7iI';

auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
auth.set_access_token(user_token, user_secret)
api = tweepy.API(auth)
# print api.me().screen_name
# print api.me().name
# from pymongo import MongoClient
# client = MongoClient()



class CustomStreamListener(tweepy.StreamListener):
    def on_status(self, status):
        print status.text, '@'+status.author.screen_name
		# createMongoEntry(status)

    def on_error(self, status_code):
        print >> sys.stderr, 'Encountered error with status code:', status_code
        return True # Don't kill the stream

    def on_timeout(self):
        print >> sys.stderr, 'Timeout...'
        return True # Don't kill the stream

sapi = tweepy.streaming.Stream(auth, CustomStreamListener())
sapi.filter(track=['Hyundai'])
